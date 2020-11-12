@include('layouts.header')
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">qkooooooo</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<section id="news">
    <div class="container">
        <h2 class="text-center">Новини</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="top_news">
                    <a href="#">
                        <article>
                            <img src="assets/img/image2.jpg" alt="">
                            <div class="black_title">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <p>23.04</p>
                                <h3>STANDART Lorem <span>Ipsum passage</span></h3>
                            </div>
                        </article>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="top_news">
                    <a href="#">
                        <article>
                            <img src="assets/img/image2.jpg" alt="">
                            <div class="black_title">
                                <p>23.04</p>
                                <h3>STANDART Lorem <span>Ipsum passage</span></h3>
                            </div>
                        </article>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="top_news">
                    <a href="#">
                        <article>
                            <img src="assets/img/image2.jpg" alt="">
                            <div class="black_title">
                                <p>23.04</p>
                                <h3>STANDART Lorem <span>Ipsum passage</span></h3>
                            </div>
                        </article>
                    </a>
                </div>
            </div>
        </div>
        <div class="black_bg">
            <div class="row">
                <div class="col-md-5">
                    <img src="assets/img/news1.png" alt="">
                </div>
                <div class="col-md-7">
                    <h3>The standard Lorem Ipsum passage</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etLead the fight against the ruthless</p>
                    <div class="see_more">
                        <a href="#">See more</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <img src="assets/img/news2.png" alt="">
                </div>
                <div class="col-md-7">
                     <h3>The standard Lorem Ipsum passage</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etLead the fight against the ruthless</p>
                    <div class="see_more">
                        <a href="#">See more</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <img src="assets/img/news3.png" alt="">
                </div>
                <div class="col-md-7">
                     <h3>The standard Lorem Ipsum passage</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etLead the fight against the ruthless</p>
                    <div class="see_more">
                        <a href="#">See more</a>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer')