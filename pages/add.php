<div class="row justify-content-center m-3">
    <a href="index.php?page=home" class="btn text-white" style="background-color: #3f51b5;">Retour</a>
</div>
<div class="row justify-content-center m-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Nouvelle tâche</h2>
                        <form method="POST" action="functions/add_func.php">
                            <div class="form-group">
                                <label for="task_name">Titre tâche</label>
                                <input type="text" class="form-control" name="task_name" placeholder="Entrez votre le titre de la tâche" required>
                            </div>
                            <div class="form-group">
                                <label for="task_desk">Description</label>
                                <textarea class="form-control" placeholder="Entrez votre la description de la tâche" name="task_desk" cols="30" rows="10"></textarea>
                            </div>
                            <button type="submit" style="background-color: #3f51b5;" class="btn btn-block text-white">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>