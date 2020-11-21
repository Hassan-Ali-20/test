@extends('layouts/master')
 
@section('test')
     <!--Start Features-->
     <section class="Features">
        <div class="container">
            <div class="feat">
                <h3>VALUES</h3>
                <p>Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est.</p>
               
            </div>
            <div class="feat">
                
                <h3>GOALS</h3>
                <p>Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est.</p>
            </div>
            
            <div class="feat">
                <h3>HOBBIES</h3>
                <p>Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est.</p>
            </div>
        </div>
    </section>
    <!--End Features-->
    
    <!--start About me-->
    <div class="About-me">
        <div class="container">
            <div class="img" >
                <img src="{{URL::asset("Img/m.jpg")}}">
            </div>
            <div class="info">
                <h3>About Me</h3>
                <p>Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, te usu virtute placerat. Purto brute disputando cu est , te usu virtute placerat. Purto brute disputando cu est.</p>
                <p>Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, te usu virtute placerat.</p>
                <div class="hobbies">
                    <div>
                        <section> <i class="fa fa-home fa-2x"></i><h3>Web Design</h3></section>
                        <p>Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam</p>
                    </div>
                    <div>
                        <section><i class="fa fa-paint-brush fa-2x"></i><h3>Graphic Design</h3></section>
                        <p> Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam</p>
                    </div>
                    <div>
                        <section><i class="fa fa-suitcase fa-2x"></i><h3>Marketing</h3></section>
                        <p>Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam</p>
                    </div>
                    <div>
                        <section><i class="fa fa-globe fa-2x"></i> <h3>SEO</h3></section>
                        <p>Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!--End About me-->
    
    <!--Start My skills-->
    <div class="my-skills">
        <div class="container">
            <div class="skills">
                <h3>My Skills</h3>
                <p>Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, te usu virtute placerat. Purto brute disputando cu est.</p>
                <p>Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, te usu virtute placerat.</p>
                <button>Contact Me</button>
            </div>
            <div class="progress">
                <div class="technology">
                    <h3>Html/Css</h3>
                    <div><span>90% &nbsp;</span></div>
                    
                </div>
                <div class="technology">
                    <h3>Php/MySQL</h3>
                    <div><span style="width: 60%; background-color: rgb(175, 204, 45);">60% &nbsp;</span></div>
                </div>
                <div class="technology">
                    <h3>Wordpress</h3>
                    <div><span style="width: 80%; background-color: rgb(95, 204, 45);">80% &nbsp;</span></div>
                </div>
                <div class="technology">
                    <h3>Graphic Design</h3>
                    <div><span style="width: 70%; background-color: rgb(122, 204, 45);">70% &nbsp;</span></div>
                </div>
            </div>
        </div>
    </div>
    
    <!--End My skills-->
    <!--start Resume-->
    <div class="re">
        <div class="container">
            <h3>Resume</h3>
            <p>Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est.</p>
            <button>Download Resume</button>
        </div>
        
    </div>
    
    <!--End Resume-->
    
    <!--Start Education-->
    <div class="my-Education">
        <div class="container">
            <div class="main">
                <h3>My Education</h3>
                <p>Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, te usu virtute placerat. Purto brute disputando cu est.</p>
                <p>Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, te usu virtute placerat.</p>
                
            </div>
            <div class="exp">
                <div class="cer">
                    <h3>Graphic Design Diploma</h3>
                    <p> <strong>Reeves College</strong>  / June 2008 / May 2010</p>
                    <span>4.0 GPA</span>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, te usu virtute placerat. Purto brute disputando cu est.</p>
                </div>
                <div class="cer">
                    <h3>CIT Diploma
                    </h3>
                    <p> <strong>Lithbridge College</strong>  / June 2006 / May 2008</p>
                    <span>1 Year</span>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, te usu virtute placerat. Purto brute disputando cu est.</p>
                </div>
            </div>
            <div class="clearfix"></div>
            <hr/>
            <div class="main">
                <h3>My Work Exprition</h3>
                <p>Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, te usu virtute placerat. Purto brute disputando cu est.</p>
                <p>Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, te usu virtute placerat.</p>
                
            </div>
            <div class="exp">
                <div class="cer">
                    <h3>Lead Web Designer
                    </h3>
                    <p> <strong>ABC Company Egypt </strong>  / June 2006 / May 2008</p>
                    <span>1 Year</span>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, te usu virtute placerat. Purto brute disputando cu est.</p>
                </div>
                <div class="cer">
                    <h3>CIT Diploma
                    </h3>
                    <p> <strong>Lithbridge College</strong>  / June 2006 / May 2008</p>
                    <span>2 Year</span>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, te usu virtute placerat. Purto brute disputando cu est.</p>
                </div>
                <div class="cer">
                    <h3>IT man
                    </h3>
                    <p> <strong>Lithbridge College</strong>  / June 2006 / May 2008</p>
                    <span>3 Year</span>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, te usu virtute placerat. Purto brute disputando cu est.</p>
                </div>
            </div>
        </div>
    </div>
    
    <!--End My Education-->
    
    <!--start Testi-->
    <div class="Testi">
        <div class="container">
            
            <p>Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, Lorem ipsum dolor sit amet
                Hassan Zohdy.</p>
            <h3>Khalid Taher</h3>
            <div class="sq">
                <span></span>
                <span class="ac"></span>
                <span></span>
                <span></span>


            </div>
        </div>
        
    </div>
    
    <!--End Testi-->
    
    <!--start Portfolio-->
    <div class="portfolio">
        <div class="container">
            <h3>Portfolio</h3>
            <p>Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, te usu virtute placerat. Purto brute disputando cu est, te usu virtute placerat. Purto brute disputando cu est.</p>
            <div class="ourwork">
                <div><img src="{{URL::asset("Img/1.jpg")}}"></div>
                <div><img src="{{URL::asset("Img/2.jpg")}}"></div>
                <div><img src="{{URL::asset("Img/3.jpg")}}"></div>
                <div><img src="{{URL::asset("Img/4.jpg")}}"></div>
                <div><img src="{{URL::asset("Img/07.jpg")}}"></div>
                <div><img src="{{URL::asset("Img/08.jpg")}}"></div>
                <div><img src="{{URL::asset("Img/09.jpg")}}"></div>
                <div><img src="{{URL::asset("Img/5.jpg")}}"></div>
                <div><img src="{{URL::asset("Img/06.jpg")}}"></div>
                
            </div>
        </div>
    </div>
    
    
    
    <!--End Portfolio-->
    
@endsection