<footer>

    <div class="container">
        @if (!Auth::user())
        <div class="row">
            <div class="col-md-4">
                <div class="f_item">
                    <h2>accusantium</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio laboriosam earum voluptatum nihil, accusamus eveniet voluptate dolores autem nemo officiis sint molestiae ex in delectus veniam. Explicabo necessitatibus porro nam.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="f_item">
                    <h2>accusantium</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, aut vero pariatur sint tempore officiis cumque nobis veniam inventore consequuntur ducimus harum reiciendis et, ratione minima sed animi, sit quae!</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="f_item">
                    <h2>accusantium</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio in doloribus error, quibusdam molestiae. Placeat inventore veniam, eligendi, alias maxime dolore fugit amet numquam possimus id nobis molestias doloremque, aliquam!</p>
                </div>
            </div>
        </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="@if (!Auth::user()) all_rights @endif f_font text-center">
                    <p>&copy; 2020 Gamertivity. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>

</footer>


<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>