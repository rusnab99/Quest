<div id="editor">
    <label for="question">Вопрос</label>
    <input id="question"><br/>
    <span>Ответы:</span>
    <button class="addBtn" onclick="addVariant()">+</button>
    <div id="variants">

    </div>
</div>
<script>
    var i =0;
    class node{
        constructor(name,previous,next,question,size)
        {
            this.name=name;
            this.previous=previous;
            this.question=question;
            this.size=size;
        }
    }
    function addVariant() {
        document.getElementById("variants").innerHTML=document.getElementById("variants").innerHTML+"<div class=\"variant\" id='variant"+i+"'>\n" +
            "        <label id=\"label"+i+"\" for=\"varText\">Вариант ответа</label>\n" +
            "        <input name=\"varText\" id='varText"+i+"' class=\"varText\">\n" +
            "        <label for=\"isByUser\">Вводится пользователем</label>\n" +
            "        <input onclick='changeType("+i+")' name=\"isByUser\" id='isByUser"+i+"' type=\"checkbox\" class=\"isByUser\">\n" +
            "\n" +
            "        <button class=\"removeBtn\" onclick='removeVariant(this.parentNode)'>-</button>\n" +
            "        <button class=\"goBtn\">&#10132;</button>\n" +
            "    </div>";
        i++;
    }

    function removeVariant(elem) {
        elem.parentNode.removeChild(elem);
    }

    function changeType(index) {

        if(document.getElementById("label"+index).innerText=="Вариант ответа")
            document.getElementById("label"+index).innerText="Уникальное имя ответа";
        else
            document.getElementById("label"+index).innerText="Вариант ответа";
    }
</script>
