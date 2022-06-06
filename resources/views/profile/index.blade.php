@include('layouts.header')
<section id="profile_view">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include('layouts.profile.menu')
            </div>
            <div class="white_side">
                <div class="col-md-9">
                    <div class="profile_change">
                        <form method="POST">
                            <input type="text">
                            <input type="text">
                            <input type="text">
                            <input type="text">
                            <input type="text">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('layouts.footer')
