document.getElementById('form1').addEventListener('submit', (event)=>{
    event.preventDefault();

    var form = new FormData(document.getElementById('form1'));
    fetch("/inserir.php", {
        method: "POST",
        body: form
    })
    .then(()=>{
        getComments();
        document.getElementById('name').value = "";
        document.getElementById('comment').value = "";
    });
});

function getComments() {
    fetch("/selecionar.php", { method: "GET" })
      .then((response) => response.json())
      .then((result) => {
  
        boxComment = document.getElementById("box_comment");
        qtdComments = document.querySelectorAll("div.b_comm");
  
        for (var i = 0; i < result.length; i++) {

            if(qtdComments.length > 0 && i < result.length-1){
                continue;
            }

            if (result[0].qtd === undefined) {

                var div = document.createElement("div");
                div.classList.add('b_comm');

                var name = document.createElement("h4");
                name.innerHTML = result[i].name;
                div.appendChild(name);

                var comment = document.createElement("p");
                comment.innerHTML = result[i].comment;
                div.appendChild(comment);

                boxComment.appendChild(div);
            }
        }
    });
}

getComments();
