 <?php require ('lib/top.php'); ?>
 <!-- ##### Contact Area Start ##### -->
 <section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" style="background-image: url(img/bg-img/bg-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading white">
                        <p>See what’s new</p>
                        <h2>Get In Touch</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                        <form action="_blog1write.php" method="post">
                            <div class="row">
                                
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input name="title" type="text" class="form-control"  placeholder="title">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input name="category" type="text" class="form-control" placeholder="category">
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="content" class="form-control" cols="60" rows="10" placeholder="write your content"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input name="img_file" type="file" class="form-control">
                                    </div>
                                </div>

                                <div class="col-12 text-center">
                                    <button class="btn oneMusic-btn mt-30" type="submit">Send<i class="fa fa-angle-double-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

  <?php require ('lib/footer.php'); ?>