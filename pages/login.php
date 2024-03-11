<div class="row justify-content-center m-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Connexion</h2>
                        <form method="POST" action="functions/login_func.php">
                            <div class="form-group">
                                <label for="email">Adresse e-mail</label>
                                <input type="email" class="form-control" name="email" placeholder="Entrez votre adresse e-mail" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Mot de passe</label>
                                <input type="password" class="form-control" name="password" placeholder="Entrez votre mot de passe" required>
                            </div>
                            <small>Vous êtes nouveau ?
                                <a href="index.php?page=register">Inscrivez-vous</a>
                            </small>
                            <button type="submit" style="background-color: #3f51b5;" class="btn btn-block text-white">Se connecter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>