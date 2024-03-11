<div class="row justify-content-center m-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Inscription</h2>
                        <form method="POST" action="functions/register_func.php">
                            <div class="form-group">
                                <label for="username">Nom d'utilisateur</label>
                                <input type="text" class="form-control" name="username" placeholder="Entrez votre nom d'utilisateur" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Adresse e-mail</label>
                                <input type="email" class="form-control" name="email" placeholder="Entrez votre adresse e-mail" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Mot de passe</label>
                                <input type="password" class="form-control" name="password" placeholder="Entrez votre mot de passe" required>
                            </div>
                            <div class="form-group">
                                <label for="confirm-password">Confirmation mot de passe</label>
                                <input type="password" class="form-control" name="confirm-password" placeholder="Confirmez votre mot de passe"  required>
                            </div>
                            <button type="submit" style="background-color: #3f51b5;" class="btn btn-block text-white">S'inscrire</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>