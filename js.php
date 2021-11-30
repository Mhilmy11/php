<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="js.css">
</head>
<body>
    <div id="modal" class="modal">
        <div class="in-modal">
            <h1 class="in-form">New Note</h1>
            <form onsubmit="onSubmit(event)">
                <div class="in-form">
                    <label>Title</label>
                    <input required name="title" class="in-form1" type="text">
                </div>
                <div class="in-form">
                    <label>Body</label>
                    <textarea required name="body" class="in-form1"></textarea>
                </div>
                <div class="in-form">
                    <button class="btn-3">Create</button>
                    <button class="btn-2" onclick="Cancel()">Cancel</button>
                </div>
            </form>
        </div>
    </div>

    <header>
        <div class="container head">
            <h1>NOTE</h1>
            <button class="btn-1" onclick="newNote()">+ NOTE</button>
        </div>
    </header>

    <div>
        <div id="note" class="container note">
            <?php 
                for ($i=0; $i < 100; $i++) { 
            ?>
            
            <div class="card">
                <h2>Title</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt aliquid culpa asperiores qui unde pariatur corrupti tempore architecto nam dolorum deleniti ipsum commodi, minima ullam est perferendis nemo a incidunt.</p>
            </div>

            <?php } ?>
        </div>

    </div>
</body>
<script>
    var modal = document.getElementById("modal")

    function newNote(){
        modal.style.display="flex"
    }

    function Cancel(){
        modal.style.display="none"
    }

    function onSubmit(e){
        e.preventDefault()
        var title = e.target['title'].value
        var body = e.target["body"].value
        console.log(title)

        var titleClone = document.getElementsByClassName('card')[0]

        var note = titleClone.cloneNode(true)

        note.children[0].innerHTML = title
        note.children[1].innerHTML = body



        document.getElementById("note").appendChild(note) 

        Cancel()
    }
</script>
</html>