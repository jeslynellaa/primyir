<style>
.table-container {
    display: flex;
}

.side {
    display: inline-block;
}

table {
    border-collapse: collapse;
    width: 30%;
    text-align: center;
    font-size: 11px;

}

.with-border table, tr, td, th {
  border: 1px solid black;
}

th {
  vertical-align: top;
  padding: .2rem .5rem;
}


.pdf-header {
	display: flex;
	flex-wrap: wrap;
}

.pdf-header .sub-header {
    /* width: 65rem; */
    padding-top:  1rem;
}

.pdf-header img {
    width: 50px;
    height: 50px;
    margin-top: 2rem;
    padding-right: 1rem;
}

.pdf-header .title {
    text-align: center;
}

.pdf-header p {
    margin: 0;
}

.pdf-header h4 {
    margin: .5rem;
}

.pdf-header p {
    font-size: 7px;
}

.pdf-header .info {
    display: flex;
	flex-wrap: wrap;
    width: 100%;
    justify-content: space-around;
}

.flex{
    display: flex;
}

.row {
    flex-wrap: wrap;
    width: 100%;
    justify-content: space-between;
}

.col-1 {
    flex-basis: 100%;
}

.col-2 {
    flex-basis: 100%;
}

.pdf-header .sub-info {
    margin-top: 1rem;
}

.pdf-header .bold{
    font-weight: 700;
}

.footer {
    margin-top: 1rem;
    font-size: 12px;
}

hr {
    margin-top: 3rem;
}

.parent {  
    text-align: center;
}

/* .quarter {
    margin: 2rem;
} */

.sub-quarter {
    display: flex;
     margin: 1rem 0;
}

.line{
    width: 70%;
    /* margin-left: 1.5rem; */
    border-bottom: 1px solid black;
}
.move{
    float: left;
}

.m-left-2{
    margin-left: 2rem;
}

.m-left-3{
    margin-left: 3rem;
}

.m-left-6{
    margin-left: 6rem;
}

.m-left-8{
    margin-left: 8rem;
}

.true-quarter .line{
    padding: 1rem;
}

.secondColumn{
    margin-left: 5rem;
}
.right-align {
  text-align: right;
  width: 50%;
}
.margin-bottom {
  margin-bottom: -1rem;
}

/* .core-values th, td {
    padding: 1rem 1rem;
} */
/* #desc-table tr, td, th{
    border: 1px solid white;
} */

</style>

<script src="http://code.jquery.com/jquery-3.4.1.js"></script>
<script src="../../../../../../plugins/jquery/printThis.js"></script>

<script>
$(document).ready(function(){
  $('#generate-sf9').click(function(){
    $('#sf9').printThis({
      importStyle: true,
      header: null,
      footer: null,
      pageTitle: null,
      printDelay: 333,
    });
  });
});
</script>

<div>
    <div id="sf9">       
        <div class="table-container">
            <div class="with-border">
                <div class="parent">
                    <h3 class="margin-bottom">Attendance Record</h3>
                </div>
                <table style="height: 10rem; margin: 2rem; padding: 2rem">
                    <tr style="background-color: #f0f0f0">
                        <th></th>
                        <th>Jun</th>
                        <th>Jul</th>
                        <th>Aug</th>
                        <th>Sept</th>
                        <th>Oct</th>
                        <th>Nov</th>
                        <th>Dec</th>
                        <th>Jan</th>
                        <th>Feb</th>
                        <th>Mar</th>
                        <th>Apr</th>
                        <th>Total</th>
                
                    </tr>
                    <tr>
                        <th>No. of School Days</th>
                        <script>
                            for (col = 1; col <= 12; col++) {
                                document.write(" <td style= padding:9px ></td> ")
                            }
                        </script>

                    </tr>
                    <tr>
                        <th>No. of Days Present</th>
                        <script>
                            for (col = 1; col <= 12; col++) {
                                document.write(" <td style= padding:9px ></td> ")
                            }
                        </script>
                         <tr>
                        <th>No. of Times Absent</th>
                        <script>
                            for (col = 1; col <= 12; col++) {
                                document.write(" <td style= padding:9px ></td> ")
                            }
                        </script>

                    </tr>
                    
                </table>  
                <div class="parent">
                    <h4>PARENT/GUARDIAN SIGNATURE</h4>
                </div>
                <div class="quarter m-left-2 true-quarter">
                    <div class="sub-quarter">
                        <span>1<sup>st</sup>Quarter</span>
                        <span class="line"></span>
                    </div>
                    <div class="sub-quarter">
                        <span>2<sup>nd</sup>Quarter</span>
                        <span class="line"></span>
                    </div>
                    <div class="sub-quarter">
                        <span>3<sup>rd</sup>Quarter</span>
                        <span class="line"></span>
                    </div>
                    <div class="sub-quarter">
                        <span>4<sup>th</sup>Quarter</span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>

            <div class="secondColumn">
                <div class="pdf-header">
                    <img src="/png/deped_logo.png" alt="deped logo">
                    <div class="sub-header">
                        <div class="title">
                            <h4 style="margin-left: 5rem;">Republic of the Philippines</h4>
                            <h4 style="margin-left: 5rem;">DEPARTMENT OF EDUCATION</h4>
                        </div>
                        <div class="quarter">
                            <div class="sub-quarter">
                                <span>Region</span>
                                <span class="line"></span>
                            </div>
                            <div class="sub-quarter">
                                <span>Division</span>
                                <span class="line"></span>
                            </div>
                            <div class="sub-quarter">
                                <span>District</span>
                                <span class="line"></span>
                            </div>  
                            <div class="sub-quarter">
                                <span>School</span>
                                <span class="line"></span>
                            </div>                      
                        </div>
                    </div>
                </div>
                <div class="parent">
                    <h4 class="margin-bottom">LEARNER'S PROGRESS REPORT CARD</h4>
                    <p>School year<u>2023-2024</u></p>
                </div>

                <div class="quarter">
                    <div class="sub-quarter">
                        <span>Name:</span>
                        <span class="line"></span>
                    </div>
                    <div class="sub-quarter">
                        <div class="">
                            <span>Age:</span>
                            <span>_________________</span>
                        </div>
                        <div class="">
                            <span>Sex:</span>
                            <span>_________________</span>
                        </div>
                    </div>
                    <div class="sub-quarter">
                        <div style="margin-bottom: 1rem;">
                            <span>Grade:</span>
                            <span>________</span>
                        </div>
                        <div>
                            <span>Section:</span>
                            <span>________</span>
                        </div>
                        <div>
                            <span>LRN:</span>
                            <span>_________</span>
                        </div>
                        
                    </div>
                
                </div>
                    <!-- Dear Parent  -->
                    <div style="font-size: 13px;">
                        <span>Dear Parent,</span>
                    </div>
                    <div style="font-size: 13px;">
                        <span style="margin-left: 3rem;">This report card shows the ability and the progress your child has made in the different learning areas as well as his/her progress in core values.</span>
                    </div>
                    <div style="font-size: 13px; margin-bottom: -1rem;">
                        <span style="margin-left: 3rem;">The school welcomes you should desire to know more about your child's progress.</span>
                    </div>
                    <div style="font-size: 14px; width: 50%;">
                    <hr style="margin-left: 21rem; margin-bottom: -1rem; border-width: 1px; width: 50%;">
                    <p style="margin-left: 24rem; margin-bottom: -3rem;">Teacher</p>
                    <hr style="margin-left: 2rem; margin-bottom: -1rem; border-width: 1px; width: 60%;">
                    <p style="margin-left: 3rem; margin-bottom: -1rem;">Head Teacher/Principal</p>
                    </div>
                   
                    <div class="parent">
                        <h4 style="margin-bottom: 0.2rem;">Certificate of Transfer</h4>   
                    </div>
                    <div class="quarter">
                    <div class="sub-quarter">
                        <div style="font-size: 13px;">
                            <span>Admitted to Grade______</span>
                            <span>Section_____</span>
                            <span>Room_______</span>
                            <p style="margin-bottom: -1rem;"></p>
                            <span>Eligible for Admission to Grade___________________</span>
                            <p style="margin-bottom: -1rem;"></p>
                            <p style="margin-bottom: -2rem;">Approved:</p>
                    
                            <hr style="margin-left: 21rem; margin-bottom: -1rem; border-width: 1px; width: 30%;">
                            <p style="margin-left: 24rem; margin-bottom: -3rem;">Teacher</p>
                            <hr style="margin-left: 3rem; margin-bottom: -1rem; border-width: 1px; width: 30%;">
                            <p style="margin-left: 3rem; margin-bottom: -1rem">Head Teacher/Principal</p>
                            <p style="margin-bottom: 2rem;"></p>
                            <p style="margin-left: 12rem; font-size: 13px;">Cancellation of Eligibility to Transfer</p>
                            <p style="margin-bottom: -1rem;">Admitted in______________________</p>
                            <p>Date:____________________</p>
                            <hr style="margin-left: 21rem; margin-bottom: -1rem; border-width: 1px; width: 30%;">
                            <p style="margin-left: 24rem; margin-bottom: -3rem;">Principal</p>
                    </div>
                    </div>

                    </div>

            </div>
            

        </div>

        <br><br><br><br>

        <div style="page-break-after:always"></div>

        <!-- Learning Areas 2nd Page  -->
        <div class="table-container" >
            <div class="with-border">
                    <div class ="parent">
                        <h4>REPORT ON LEARNING PROGRESS AND ACHIEVEMENT</h4>
                    </div>
                    <table style="width: 90%; margin: 2rem; padding: 2rem">
                        <tr style="background-color: #f0f0f0">
                            <th colspan = "1">Learning Areas</th>
                            <th colspan = "4">Quarter</th>
                            <th>Final Rating</th>
                            <th>Remarks</th>
                        </tr>
                        <tr>
                            <th></th>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th></th>
                        </tr>
                        <tr>
                            <th><span class="move">Filipino</span></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th><span class="move">English</span></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th><span class="move">Mathematics</span></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th><span class="move">Science</span></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th><span class="move">Araling Panlipunan(AP)</span></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th><span class="move">Edukasyon sa Pagpapakatao(EsP)</span></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th><span class="move">Edukasyong Pantahanan at Pangkabuhayan(EPP)</span></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th><span class="move">MAPEH</span></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th><i>Music</i></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th><i>Art</i></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th><i>Physical Education(PE)</i></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th><i>Health</i></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td style="border-bottom: 1px solid white; border-left: 1px solid white;"></td>   
                            <td colspan = "4">General Average</td>
                            <td></td>
                            <td style="border-bottom: 1px solid white; border-right: 1px solid white;"></td>
                        </tr>
                    </table>
            </div>         
            <div class="with-border">
                <div class= "parent">
                    <h4>REPORT ON LEARNER'S OBSERVERED VALUES</h4>
                </div>
                <table class="core-values" style="width: 80%; margin: 2rem; padding: 2rem"> 
                    <tr style="background-color: #f0f0f0">
                        <th colspan = "1">Core Values</th>
                        <th colspan = "1" >Behavior Statements</th>
                        <th colspan = "4">Quarter</th>
                    </tr>
                    <tr>
                        <th></th>  
                        <th></th>  
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                    </tr>
                    <tr>
                        <td>1. Maka-Diyos</td>
                        <td>Expresses one’s spiritual beliefs while respecting the spiritual beliefs of others</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2. Makatao</td>
                        <td>Shows adherence to ethical principles by upholding truth</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3. Maka-kalikasan</td>
                        <td>Cares for the environment and utilizes resources wisely, judiciously, and economically</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td rowspan="2">4. Makabansa</td>
                        <td>Demonstrates pride in being a Filipino; exercises the rights and responsibilities of a Filipino citizen</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Demonstrates pride in being a Filipino; exercises the rights and responsibilities of a Filipino citizen</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>

        <div>
            <table id ="desc-table" style = "height: 1rem; margin-bottom: -5rem;">
                <tr style="border: 1px solid white; margin: 0">
                    <th style="border: 1px solid white;">Descriptors</th>
                    <th style="border: 1px solid white;">Grading Scale</th>
                    <th style="border: 1px solid white;">Remarks</th>
                </tr>
                <tr style="border: 1px solid white;">
                    <td style="border: 1px solid white;">Outstanding</td>
                    <td style="border: 1px solid white;">90-100</td>
                    <td style="border: 1px solid white;">Passed</td>
                </tr>
                <tr style="border: 1px solid white;">
                    <td style="border: 1px solid white;">Very Satisfactory</td>
                    <td style="border: 1px solid white;">85-89</td>
                    <td style="border: 1px solid white;">Passed</td>
                </tr>
                <tr style="border: 1px solid white;">
                    <td style="border: 1px solid white;">Satisfactory</td>
                    <td style="border: 1px solid white;">80-84</td>
                    <td style="border: 1px solid white;">Passed</td>
                </tr>
                <tr style="border: 1px solid white;">
                    <td style="border: 1px solid white;">Fairly Satisfactory</td>
                    <td style="border: 1px solid white;">75-79</td>
                    <td style="border: 1px solid white;">Passed</td>
                </tr>
                <tr style="border: 1px solid white;">
                    <td style="border: 1px solid white;">Did Not Meet Expectations</td>
                    <td style="border: 1px solid white;">Below 75</td>
                    <td style="border: 1px solid white;">Failed</td>
                </tr>
            </table>
        </div>
         <div>
            <table id ="desc-table" style = "height: 1rem; margin-left: 40rem;">
                <tr style="border: 1px solid white; margin: 0">
                    <th style="border: 1px solid white;">Marking</th>
                    <th style="border: 1px solid white;">Non-numerical Rating</th>
                    
                </tr>
                <tr style="border: 1px solid white;">
                    <td style="border: 1px solid white;">AO</td>
                    <td style="border: 1px solid white;">Always Observed</td>
                    
                </tr>
                <tr style="border: 1px solid white;">
                    <td style="border: 1px solid white;">SO</td>
                    <td style="border: 1px solid white;">Sometimes Observed</td>
                   
                </tr>
                <tr style="border: 1px solid white;">
                    <td style="border: 1px solid white;">RO</td>
                    <td style="border: 1px solid white;">Rarely Observed</td>
                    
                </tr>
                <tr style="border: 1px solid white;">
                    <td style="border: 1px solid white;">NO</td>
                    <td style="border: 1px solid white;">Not Observed</td>
                    
                </tr>

            </table>
        </div>

        </div>

            <div class="side" style="width:100rem"></div>
        </div>
    </div>
    <a href="#" id="generate-sf9">Generate PDF</a>
</div>

