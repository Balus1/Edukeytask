var textareas = {};

textareas.list = 'undefined';
textareas.template = 'undefined';
textareas.new_input = 'undefined';

textareas.renderTemplate = function (textarea) {
    textareas.template.tmpl(textarea).appendTo(textareas.list)
};

textareas.get = function() {
    $.ajax({
        type: 'GET',
        url: 'textareas.json'
    }).success(function (data) {
        for (var i in data.textareas) {
            textareas.renderTemplate(data.textareas[i]);
        }
    });
};

textareas.delete = function (id) {
    $.ajax({
        type: 'DELETE',
        url: 'textareas/'+id+'.json'
    }).success(function () {
        $('#textarea_'+id).remove();
    });
};

textareas.add = function() {
    $.ajax({
        type: 'POST',
        url: 'textareas.json',
        data: {content: textareas.new_input.val()}
    }).success(function(data) {
        textareas.renderTemplate(data.textarea)
    });
};

textareas.sort = function () {
    $.ajax({
        type: 'PUT',
        url: 'textareas/sort.json',
        data: {sorting: $(textareas.list).sortable('serialize')}
    });
};


$(function() {
    textareas.list = $('#textarea-list').sortable({
        update: function() {
            textareas.sort();
        }
    });
    textareas.template = $('#textarea-template');
    textareas.new_input = $('#textarea-new');
    textareas.get();
});