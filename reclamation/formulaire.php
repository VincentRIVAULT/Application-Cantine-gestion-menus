

    <main>
        
        <form method="post" class="container" action="index.php?table=reclamation&action=envoiMail" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nom">Votre nom</label>
                    <input type="text" class="form-control" name="nom" id="nom" placeholder="Votre nom">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="prenom">Votre prénom</label>
                    <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Votre prénom">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Votre mail</label>
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend3">@</span>
                        <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="objet">Votre objet</label> 
                    <input type="text" class="form-control" name="objet" id="objet" placeholder="Votre objet">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="message">Votre message</label> 
                    <textarea id="message" class="form-control" name="message"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Pièce jointe</label>
                <input type="file" class="form-control-file" name="fichier" id="exampleFormControlFile1">
            </div>
            
            <button type="submit" class="btn btn-primary">Envoyer</button>
    
        </form>
    </main>



    