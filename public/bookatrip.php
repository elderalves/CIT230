<?php 
    
    $title = "Book a Trip";
    
    require_once "inc/header.php"; 

?>

</div>

</header>


<section class="bookatrip">

    <div class="title-section">
        <h2>Book a Trip</h2>
    </div>

    <div class="container">
        
        <div class="table">
        
            <div class="row header blue">
                <div class="cell">
                    Adventure Trip
                </div>
                <div class="cell">
                    Length
                </div>
                <div class="cell">
                    Skill
                </div>
                <div class="cell">
                    Adult
                </div>
                <div class="cell">
                    Youth
                </div>
            </div>
                
            <div class="row">
                <div class="cell">Whitewater Rafting</div>
                <div class="cell">Half Day</div>
                <div class="cell">Beginner</div>
                <div class="cell">$300</div>
                <div class="cell">$250</div>
            </div>
                
            <div class="row">
                <div class="cell">Whitewater Rafting</div>
                <div class="cell">1-Day</div>
                <div class="cell">Beginner-Advanced</div>
                <div class="cell">$500</div>
                <div class="cell">$400</div>
            </div>
                
            <div class="row">
                <div class="cell">Whitewater Rafting</div>
                <div class="cell">2-Day</div>
                <div class="cell">Advanced</div>
                <div class="cell">$1,200</div>
                <div class="cell">$1,000</div>
            </div>
                
            <div class="row">
                <div class="cell">Camping</div>
                <div class="cell">Overnight</div>
                <div class="cell">Beginner</div>
                <div class="cell">$300</div>
                <div class="cell">$450</div>
            </div>

            <div class="row">
                <div class="cell">Camping</div>
                <div class="cell">3-Nights</div>
                <div class="cell">Beginner</div>
                <div class="cell">$800</div>
                <div class="cell">$950</div>
            </div>

            <div class="row">
                <div class="cell">Camping</div>
                <div class="cell">6-Nights</div>
                <div class="cell">Beginner</div>
                <div class="cell">$1,600</div>
                <div class="cell">$1,300</div>
            </div>

            <div class="row">
                <div class="cell">Fishing</div>
                <div class="cell">Half Day</div>
                <div class="cell">Beginner</div>
                <div class="cell">$300</div>
                <div class="cell">$200</div>
            </div>

            <div class="row">
                <div class="cell">Fishing</div>
                <div class="cell">1-Day</div>
                <div class="cell">Advanced</div>
                <div class="cell">$500</div>
                <div class="cell">$400</div>
            </div>
            
        </div>

        <div class="form">
            <div class="form-panel">
                <div class="form-header">
                    <h1>Book Your Adventure Today!</h1>
                </div>
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
                            <label for="adventure-type">Adventure type</label>
                            <input type="text" name="adventure-type" list="adventure-types">
                            <datalist id="adventure-types">
                                <option value="Whitewater Rafting Half Day">Whitewater Rafting Half Day</option>
                                <option value="Whitewater Rafting Full Day">Whitewater Rafting Full Day</option>
                                <option value="Whitewater Rafting Two Day">Whitewater Rafting Full Day</option>
                                <option value="Camping Overnight">Camping Overnight</option>
                                <option value="Camping Three Nights">Camping Thee Nights</option>
                                <option value="Camping Full Week">Camping Full Week</option>
                                <option value="Canoeing Full Day">Canoeing Full Day</option>
                                <option value="Fishing Half Day">Fishing</option>
                                <option value="Fishing Full Day">Fishing</option>
                            </datalist>
                        </div>
                        <div class="form-group">
                            <label for="arrival">Preferred arrival date</label>
                            <input name="arrival" type="date">
                        </div>
                        <div class="form-group">
                            <label for="comment">Any special requests or needs? Please specify below.</label>
                            <textarea rows="4" cols="50" name="comment">Enter text here...</textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit">Proceed to Checkout</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

</section>


<?php require_once "inc/footer.php"; ?>