<ul id="textarea-list" class="textarea-list"></ul>
<input id="textarea-new">
<button onclick="textareas.add();">Add</button>
<script type="text/x-jquery-tmpl" id="textarea-template">
    <li id="textarea_${id}" class="textarea-element">
        <textarea class="textarea-content">${content}</textarea>
        <button onclick="textareas.delete(${id});">X</button>
    </li>
</script>