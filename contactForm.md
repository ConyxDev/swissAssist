                    <div class="contact-form">
                        <h3>Envoyez-moi un message</h3>
                        
                        <?php
                        // Messages de succès/erreur (à implémenter dans functions.php)
                        if (isset($_GET['status']) && $_GET['status'] == 'success') {
                            echo '<div class="contact-success">Votre message a été envoyé avec succès. Je vous répondrai dans les plus brefs délais.</div>';
                        } elseif (isset($_GET['status']) && $_GET['status'] == 'error') {
                            echo '<div class="contact-error">Une erreur s\'est produite lors de l\'envoi de votre message. Veuillez réessayer.</div>';
                        }
                        ?>
                        
                        <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
                            <input type="hidden" name="action" value="traiter_formulaire_contact">
                            <?php wp_nonce_field('contact_form_submission', 'contact_nonce'); ?>
                            
                            <div class="form-row">
                                <div class="form-group form-group-half">
                                    <label for="nom" class="form-label">Nom *</label>
                                    <input type="text" id="nom" name="nom" class="form-control" required>
                                </div>
                                
                                <div class="form-group form-group-half">
                                    <label for="prenom" class="form-label">Prénom *</label>
                                    <input type="text" id="prenom" name="prenom" class="form-control" required>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group form-group-half">
                                    <label for="email" class="form-label">Email *</label>
                                    <input type="email" id="email" name="email" class="form-control" required>
                                </div>
                                
                                <div class="form-group form-group-half">
                                    <label for="telephone" class="form-label">Téléphone</label>
                                    <input type="tel" id="telephone" name="telephone" class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="sujet" class="form-label">Sujet *</label>
                                <select id="sujet" name="sujet" class="form-select" required>
                                    <option value="">Sélectionnez un sujet</option>
                                    <option value="Demande de devis">Demande de devis</option>
                                    <option value="Secrétariat médical">Secrétariat médical</option>
                                    <option value="Gestion administrative">Gestion administrative</option>
                                    <option value="Assistanat commercial">Assistanat commercial</option>
                                    <option value="Comptabilité et facturation">Comptabilité et facturation</option>
                                    <option value="Autre">Autre</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="message" class="form-label">Message *</label>
                                <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
                            </div>
                            
                            <div class="form-check">
                                <input type="checkbox" id="rgpd" name="rgpd" class="form-check-input" required>
                                <label for="rgpd" class="form-check-label">J'accepte que mes données personnelles soient utilisées uniquement pour me recontacter.</label>
                            </div>
                            
                            <div class="form-submit">
                                <button type="submit" class="btn btn-accent">Envoyer le message</button>
                            </div>
                        </form>
                    </div>