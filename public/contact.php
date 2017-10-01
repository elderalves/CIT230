<?php 
    
    $title = "Contact";
    
    require_once "inc/header.php"; 

?>

</div>

</header>


<section class="contact-page">

    <div class="title-section">
        <h2>Contact Us</h2>
    </div>

    <div class="container">
        

        <div class="form">
            <div class="form-panel">
                <div class="form-content">
                    <form>
                        <div class="form-group">
                            <label for="username">Full Name</label>
                            <input type="text" id="fullname" name="fullname" required="required"/>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required="required"/>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" name="phone" required="required"/>
                        </div>
                        <div class="form-group">
                            <label for="comment">Message Details</label>
                            <textarea rows="4" cols="50" name="comment">Enter text here...</textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="contact-info">
            <h2>Our Info</h2>
            
            <p class="contactinfo">
                <strong>SALMON RIVER ADVENTURES</strong><br>
                1513 S. Main St., Riggins, ID 83549<br>
                (208) 777-7777<br>
            </p>

            <div class="google-maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d36145.384059951466!2d-116.31232503659594!3d45.4232100933532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54a6c55ddc7fd9d5%3A0x835ef2ac6cb8432e!2sRiggins%2C+ID+83549%2C+EUA!5e0!3m2!1spt-BR!2sbr!4v1504832784620" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>

    </div>

</section>


<?php require_once "inc/footer.php"; ?>