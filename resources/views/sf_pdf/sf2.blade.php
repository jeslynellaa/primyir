<style>

table {
  border-collapse: collapse;
  width: 95%;
  text-align: center;
  margin: .5rem 2rem;
  font-size: 10px;
}

table, tr, td, th {
  border: 1px solid black;
}

th {
  vertical-align: top;
}

.pdf-header {
	display: flex;
	flex-wrap: wrap;
}

.pdf-header .sub-header {
    width: 50rem;
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

.background {
  width: 25px;
  height: 18px;
  padding: 0;
  margin: 0;
}

.line {
  width: 1.7rem;
  height: 50px;
  border-bottom: 1px solid black;
  transform: translateY(-36.6px) translateX(-19.5px) rotate(-41deg);
  position: absolute;
  z-index: -1;
}

.background>div {
  position: relative;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
}

.bottom {
  position: absolute;
  bottom: 1px;
  right: 1px;
}

.top {
  position: absolute;
  top: 1px;
  left: 1px;
}

.inline {
    display: inline-block;
}

.m-0{
    margin: 0;
}

.w14 {
    width: 12rem;
}

.w15 {
    width: 13rem;
}

.formula {
    text-align: center;
}

.size-10 {
    font-size: 10px;
}

.flex {
    display: flex;
}

.footer {
    margin-left: 2rem;
}

.footer p{
    margin: 0;
}

.signature {
    margin-left: 2rem;
}

.signature hr {
    width: 85%;
    margin-top: 1.7rem;
}

.space {
    justify-content: space-around;
}


.guidelines {
    width: 30rem;
    margin-right: 1rem
}

.guidelines p{
    margin: .2rem;
}

.codes{
    border: 1px solid black;
    width: 18rem;
    height: 20rem;
    padding: .5rem;
    margin-top: .5rem;
}

.sumarry table {
    width: 10rem;
}


</style>

<script src="http://code.jquery.com/jquery-3.4.1.js"></script>
<script src="../../../../../../plugins/jquery/printThis.js"></script>

<script>
$(document).ready(function(){
  $('#generate-sf2').click(function(){
    $('#sf2').printThis({
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
    <div id="sf2">
        <div class="pdf-header">
            <img src="/png/deped_logo.png" alt="deped logo">
            <div class="sub-header">
                <div class="title">
                    <h4>School Form 2 (SF 2) School Register</h4>
                    <p>(This replaces Form 1, Form 2 & STS Form 4 - Absenteeism and Dropout Profile)</p>
                </div>
                <div class="info">
                    <div class="sub-info">
                        <div class="school-id">
                            <span class="bold">School ID:</span>
                            <span>00111</span>
                            <span>Region V</span>
                        </div>
                        <div class="school-name">
                            <span class="bold">School Name:</span>
                            <span>Sorsogon NHS</span>
                        </div>
                    </div>
                    <div class="sub-info">
                        <div class="Division">
                            <span class="bold">Division:</span>
                            <span>Sorsogon</span>
                        </div>
                        <div class="District">
                            <span class="bold">District:</span>
                            <span>1st District</span>
                        </div>
                    </div>
                    <div class="sub-info">
                        <div class="School Year">
                            <span class="bold">School Year:</span>
                            <span>2022-2023</span>
                        </div>
                        <div class="Grade Level">
                            <span class="bold">Grade Level:</span>
                            <span>SHS</span>
                        </div>
                        <div class="Section">
                            <span class="bold">Section:</span>
                            <span>Section</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <table>
            <tr>
                <th rowspan="3" style="width:300px">Learner's Name (Last Name, First Name, Middle Name)</th>
                <th colspan="25">(1st row for date)</th>
                <th colspan="2" style="width:1rem">Total for the Month</th>
                <th rowspan="3" style="width: 140px">REMARKS (If <strong>DROPPED OUT</strong>, state reason, please refer to legend number 2. If <strong>TRANSFERRED IN/OUT</strong>, write the name of School. </th>
            </tr>
            <tr>

                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>

                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>

                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>

                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>

                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>

                <th></th>
            </tr>
            <tr>


                <th>M</th>
                <th>T</th>
                <th>W</th>
                <th>TH</th>
                <th>F</th>

                <th>M</th>
                <th>T</th>
                <th>W</th>
                <th>TH</th>
                <th>F</th>

                <th>M</th>
                <th>T</th>
                <th>W</th>
                <th>TH</th>
                <th>F</th>

                <th>M</th>
                <th>T</th>
                <th>W</th>
                <th>TH</th>
                <th>F</th>

                <th>M</th>
                <th>T</th>
                <th>W</th>
                <th>TH</th>
                <th>F</th>

                <th style="padding: .2rem">ABSENT</th>
                <th style="padding: .2rem">TARDY</th>  
            </tr>
            <script>
                for (rows = 0; rows <= 18; rows++) {
                    document.write(" <tr> ")
                    document.write(" <td></td> ")
                    for (col = 0; col <= 24; col++) {
                        document.write(" <td class='background' > <div><span class='top'></span><span class='bottom'></span><div class='line'></div></div> </td> ")
                    }
                    document.write(" <td></td> ")
                    document.write(" <td></td> ")
                    document.write(" <td></td> ")

                    document.write(" </tr> ")
                }
            </script>
            <tr style="background-color: #f0f0f0">
                <td>MALE | TOTAL Per Day</td>
                <script>
                    for (col = 0; col <= 27; col++) {
                        document.write(" <td class='background' > <div><span class='top'></span><span class='bottom'></span><div class='line'></div></div> </td> ")
                    }
                </script>
            </tr>
            <script>
                for (rows = 0; rows <= 4; rows++) {
                    document.write(" <tr> ")
                    document.write(" <td></td> ")
                    for (col = 0; col <= 24; col++) {
                        document.write(" <td class='background' > <div><span class='top'></span><span class='bottom'></span><div class='line'></div></div> </td> ")
                    }
                    document.write(" <td></td> ")
                    document.write(" <td></td> ")
                    document.write(" <td></td> ")

                    document.write(" </tr> ")
                }
            </script>
            <tr style='page-break-after:always'></tr>
            <script>
                for (rows = 0; rows <= 15; rows++) {
                    document.write(" <tr> ")
                    document.write(" <td></td> ")
                    for (col = 0; col <= 24; col++) {
                        document.write(" <td class='background' > <div><span class='top'></span><span class='bottom'></span><div class='line'></div></div> </td> ")
                    }
                    document.write(" <td></td> ")
                    document.write(" <td></td> ")
                    document.write(" <td></td> ")

                    document.write(" </tr> ")
                }
            </script>
            <tr style="background-color: #f0f0f0">
                <td>FEMALE | TOTAL Per Day</td>
                <script>
                    for (col = 0; col <= 27; col++) {
                        document.write(" <td class='background' > <div><span class='top'></span><span class='bottom'></span><div class='line'></div></div> </td> ")
                    }
                </script>
            </tr>
            <tr style="background-color: #f0f0f0">
                <td>Combined TOTAL PER DAY</td>
                <script>
                    for (col = 0; col <= 27; col++) {
                        document.write(" <td class='background' > <div><span class='top'></span><span class='bottom'></span><div class='line'></div></div> </td> ")
                    }
                </script>
            </tr>
        </table>

        <div class="flex size-10 footer">
            <div class="guidelines">
                <span>GUIDELINES:</span>
                <p>1. The attendance shall be accomplished daily. Refer to the codes for checking learners' attendance</p>
                <p>2. Dates shall be written in the columns after Learner's Name. </p>
                <p>3. To compute the following: </p>
                <div class="compute flex space center">
                    <div class="percentage" style="margin-top: .7rem">
                        <p class="w14">a. <i>Percentage of Enrolment = </i></p>
                    </div>
                    <div class="flex">
                        <div class="formula">
                            <p>Registered Learners as of end of the month</p>
                            <hr>
                            <p>Enrolment as of 1st Friday of the school year</p>
                        </div>
                        <span style="margin-top:.5rem; margin-left: 1rem">x 100</span>
                    </div>
                </div>

                <div class="compute flex space center">
                    <div class="percentage" style="margin-top: .7rem">
                        <p class="w15">b. <i>Average Daily Attendance = </i></p>
                    </div>
                    <div class="flex">
                        <div class="formula">
                            <p>Total Daily Attendance</p>
                            <hr>
                            <p>Number of School Days in reporting month</p>
                        </div>
                        <span style="width: 2rem"></span>
                    </div>
                </div>
                <div class="compute flex space center">
                    <div class="percentage" style="margin-top: .7rem">
                        <p class="w15">c. <i>Percentage of Attendance for the month = </i></p>
                    </div>
                    <div class="flex">
                        <div class="formula">
                            <p>Average daily attendance</p>
                            <hr>
                            <p>Register Learners as of end of the month</p>
                        </div>
                        <span style="margin-top: .5rem;  margin-left: 1rem">x 100</span>
                    </div>
                </div>

                <p>4. Every end of the month, the class adviser will submit this form to the office of the principal for recording of summary table into School Form 4. Once signed by the principal, this form should be returned to the adviser </p>
                <p>5. The adviser will provide neccessary interventions including but not limited to home visitation to learner/s who were absent for 5 consecutive days and/or those at risk of dropping out</p>
                <p>6. Attendance performance of learners will be reflected in Form 137 and Form 138 every grading period.</p>
                <p>* Beginning of School Year cut-off report is every 1st Friday of the School Year</p>

               
            </div>

            <div class="codes">
                <p><b>1. CODES FOR CHECKING ATTENDANCE</b></p>
                <p>(blank) - Present; (x)- Absent; Tardy (half shaded= Upper for Late Commer, Lower for Cutting Classes)</p>
                <p><b>2.REASONS/CAUSES FOR DROPPING</b></p>
                <p><b>a.Domestic-Related Factors </b></p>
                <p>a.1. Had to take care of siblings</p>
                <p>a.2. Early marriage/pregnancy</p>
                <p>a.3. Parent's attitude toward schooling</p>
                <p>a.4. Family problems</p>
                <p><b>b. Individual Related Factors</b></p>
                <p>b.1. Illness </p>
                <p>b.2. Overage</p>
                <p>b.3. Death</p>
                <p>b.4. Drug Abuse</p>
                <p>b.5. Poor Academic performance</p>
                <p>b.6. Lack of Interest/Distractions</p>
                <p>b.7. Hunger/Malnutrition</p>
                <p><b>c. School-Related Factors</b></p>
                <p>c.1. Teacher Factor</p>
                <p>c.2. Physical condition of classroom</p>
                <p>c.3. Peer influence </p>
                <p><b>d. Geographic/Environmental</b></p>
                <p>d.1. Distance between home and school</p>
                <p>d.2. Armed conflict (incl. Tribal wars & clanfeuds)</p>
                <p>d.3. Calamities/Disasters </p>
                <p><b>e. Financial-Related</b></p>
                <p>e.1. Child labor, work </p>
                <p><b>f. Others(Specify) </b></p>
            </div>

            <div class="summary">
                <table>
                    <tr>
                        <th rowspan="2" style="width: 5rem">Month:</th>
                        <th rowspan="2" style="width: 5rem">No. of Days of Classes:</th>
                        <th colspan="3">Summary</th>
                    </tr>
                    <tr>
                        <th style="width: 1.5rem">M</th>
                        <th style="width: 1.5rem">F</th>
                        <th>TOTAL</th>
                    </tr>
                    <tr>
                        <th colspan="2"><i>* Enrolment as of (1st Friday of June)</i></th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th colspan="2"><i>Late Enrollment <b>during the month</b> (beyond cut-off)</i></th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th colspan="2"><i>Registered Learners as of <b>end of the month</b></i></th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th colspan="2"><i>Percentage of Enrolment as of <b>end of the month</b></i></th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th colspan="2"><i>Average Daily Attendance</i></th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th colspan="2"><i>Percentage of Attendance for the month</i></th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th colspan="2"><i>Number of students absent for 5 consecutive days:</i></th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th colspan="2"><b>Drop out</b></th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th colspan="2"><b>Transferred out</b></th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th colspan="2"><b>Transferred in</b></th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
                <div class="size-10 signature">
                    <span><i>I certify this is a true and correct report.</i></span>
                    <hr>
                    <div style="text-align: center">
                        <p style="margin:0; font-size: 10px"><i>(Signature of School Head over Printed Name)</i></p>
                    </div>
                </div>
                <div class="size-10 signature">
                    <span>Attested by:</span>
                    <hr>
                    <div style="text-align: center">
                        <p style="margin:0; font-size: 10px"><i>(Signature of School Head over Printed Name)</i></p>
                    </div>
                </div>
            </div>

        </div>
        <p style="margin-left: 2rem; font-size: 11px;">Page ___of____ pages</p>

    </div>
    <a href="#" id="generate-sf2">Generate PDF</a>
</div>