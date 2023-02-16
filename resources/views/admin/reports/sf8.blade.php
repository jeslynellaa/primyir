<style>

table {
  border-collapse: collapse;
  width: 30%;
  text-align: center;
  margin: 2rem;
}

table, tr, td, th {
  border: 1px solid black;
}

th {
  vertical-align:center;
}


.pdf-header {
	display: flex;
	flex-wrap: wrap;
}

.pdf-header .sub-header {
    width: 65rem;
    padding-top:  1rem;
}

.pdf-header img {
    width: 100px;
    height: 100px;
    margin-top: 2rem;
    margin-left: 2rem;
}

.pdf-header .title {
    text-align: center;
}

.pdf-header p, h4 {
    margin: 0;
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
h4{
    text-align: center;
   
}
.assessment, .assessed, .correct, .reviewed{
    font-weight: bold;
    font-size: 100%
}
#line{
    width: 13%;
    border: 0px;
    border-bottom: 1px solid black;
    height: 30px;
}


</style>

<script src="http://code.jquery.com/jquery-3.4.1.js"></script>
<script src="../../../../../../plugins/jquery/printThis.js"></script>

<script>
$(document).ready(function(){
  $('#generate-sf8').click(function(){
    $('#sf8').printThis({
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
    <div id="sf8">
        <div class="pdf-header">
            <img src="/png/deped_logo.png" alt="deped logo">
            <div class="sub-header">
                <div class="title">
                    <h4>Department of Education</h4>
                    <h4>School Form 8 Learner's Basic Health and Nutrition Report (SF 8)</h4>
                    <p><i>(For All Grade Level)</i></p>
                </div>
                <div class="info">
                    <div class="sub-info">
                        <div class="school-name">
                            <span class="bold">School Name:</span>
                            <span>Sorsogon National High School</span>
                        </div>
                        <div class="school-id">
                            <span class="bold">School ID:</span>
                            <span>00111</span>
                        </div>
                        <div class="school-name">
                            <span class="bold">Grade:</span>
                            <span>Sorsogon National High School</span>
                        </div>
                    </div>
                    <div class="sub-info">
                        <div class="District">
                            <span class="bold">District:</span>
                            <span>1st District</span>
                        </div>
                        <div class="section">
                            <span class="bold">Section:</span>
                            <span>1st District</span>
                        </div>
                    </div>
                    <div class="sub-info">
                        <div class="Division">
                            <span class="bold">Division:</span>
                            <span>Sorsogon</span>
                        </div>
                        <div class="track">
                            <span class="bold">Track/Strand(SHS):</span>
                            <span>1st District</span>
                        </div>
                    </div>
                    <div class="sub-info">
                        <div class="school-id">
                            <span class="bold">Region:</span>
                            <span>V</span>
                        </div>
                        <div class="School Year">
                            <span class="bold">School Year:</span>
                            <span>2022-2023</span>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <table style="width:90%">
            <tr>
                <th rowspan="2">No.</th>
                <th rowspan="2">Learner's Name (Last Name, First Name, Name Extension, Middle Name</th>
                <th rowspan="2">Birthdate (MM/DD/YY)</th>
                <th rowspan="2">Age</th>
                <th rowspan="2">Weight (kg)</th>
                <th rowspan="2">Height (m)</th>
                <th rowspan="2">Height^2 (m^2)</th>
                <th colspan="2">Nutritional Status</th>
                <th rowspan="2">Height for Age (HFA)</th>
                <th rowspan="2" colspan="2">Remarks</th>
            </tr>
            <tr>
                <th>BMI <br>(kg/m^2)</th>
                <th>BMI Category</th>
            </tr>
            <tr>
                <th>MALE</th>
            </tr>
            <tr>
                <th>FEMALE</th>
            </tr>
</table>
<h4>SUMMARY TABLE</h4>
<table style="width:90%">
            <tr>
                <th rowspan="2">Sex</th>
                <th colspan="6">Nutritional Status</th>
                <th colspan="5">Height for Age (HFA)</th>
            </tr>
            <tr>
                <th>Severely Wasted</th>
                <th>Wasted</th>
                <th>Normal</th>
                <th>Overweight</th>
                <th>Obese</th>
                <th>TOTAL</th>
                <th>Severely Stunted</th>
                <th>Stunted</th>
                <th>Normal</th>
                <th>Tall</th>
                <th>TOTAL</th>
            </tr>
                <tr>
                    <th>MALE</th>
                </tr>
                <tr>
                    <th>FEMALE</th>
                </tr>
                <tr>
                    <th>TOTAL</th>
                </tr>
        </table>
        <div>
            <span class="assessment">Date of Assessment:</span>
            <input type="text" id="line">
            <span class="assessed">Conducted/Assessed By:</span>
            <input type="text" id="line">
            <span class="correct">Certified Correct By:</span>
            <input type="text" id="line">
            <span class="reviewed">Reviewed By:</span>
            <input type="text" id="line">
        <p><i>Revised to conform with the instructions of Deped Order 8, s. 2015</i></p>
    </div>
    <a href="#" id="generate-sf8">Generate PDF</a>
</div>