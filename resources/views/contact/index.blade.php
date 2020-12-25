@include('layouts.header')
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contacts_page">
                    <h2 class="text-center">Контакти</h2>
                    <form action="" method="POST">
                        <div class="contact_icon">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <input type="text" name="name" placeholder="Име *">
                        </div>
                        <div class="contact_icon">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <input type="text" name="userName" placeholder="Профил *">
                        </div>
                        <div class="contact_icon">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <input type="email" name="email" placeholder="Имейл *">
                        </div>
                        <div class="contact_icon">
                            <i class="fa fa-question-circle" aria-hidden="true"></i>
                            <select name="question">
                                <option value="">Моля, изберете въпрос *</option>
                                <option value="">въпрос 1</option>
                                <option value="">въпрос 2</option>
                                <option value="">въпрос 3</option>
                                <option value="">въпрос 4</option>
                                <option value="">въпрос 5</option>
                            </select>
                        </div>
                        <div class="contact_icon">
                            <i class="fa fa-question-circle" aria-hidden="true"></i>
                            <select name="question">
                                <option value="">От къде научихте за нас? *</option>
                                <option value="">Facebook</option>
                                <option value="">Instagram</option>
                                <option value="">YouTube</option>
                                <option value="">Discord</option>
                                <option value="">От приятел</option>
                                <option value="">По друг начин</option>
                            </select>
                        </div>
                        <div class="contact_icon">
                            <i class="fa fa-comment" aria-hidden="true"></i>
                            <textarea name="message" placeholder="Съобщение *"></textarea>
                        </div>
                        <input type="submit" name="send" value="Изпрати">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer')