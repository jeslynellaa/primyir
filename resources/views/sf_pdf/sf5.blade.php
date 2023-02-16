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


</style>

<script src="http://code.jquery.com/jquery-3.4.1.js"></script>
<script src="../../../../../../plugins/jquery/printThis.js"></script>

<script>
$(document).ready(function(){
  $('#generate-sf5').click(function(){
    $('#sf5').printThis({
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
    <div id="sf5">
        <div class="pdf-header">
            <img src="/png/deped_logo.png" alt="deped logo">
            <div class="sub-header">
                <div class="title">
                    <h4>School Form 5 (SF 5) Report on Promotion and Learning Progress & Achievement</h4>
                    <p>Revised to conform with the instructions of Deped Order 8, s. 2015</p>
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

      
        <div class="table-container">
            <div class="side">
                <table style="width:40rem; margin: 2rem">
                    <tr>
                        <th>LRN</th>
                        <th>LEARNER'S NAME<p><i>(Last Name, First Name, Middle Name)</i></p></th>
                        <th>GENERAL AVERAGE</th>
                        <th>ACTION TAKEN: PROMOTED, CONDITIONAL, or RETAINED</th>
                        <th>Did Not Meet Expectations of Sthe ff.Learning Area/s as of end of current School Year</th>
                    </tr>
                    <script>
                        for (rows = 0; rows <= 20; rows++) {
                            document.write(" <tr> ")
                            for (col = 1; col <= 5; col++) {
                                document.write(" <td style= padding:9px ></td> ")
                            }
                            document.write(" </tr> ")
                        }
                    </script>
                    <tr>
                        <td></td>
                        <td style="font-size: 11px ">TOTAL MALE</td>
                        <td style="background-color: #f0f0f0"></td>
                        <td style="background-color: #f0f0f0"></td>
                        <td style="background-color: #f0f0f0"></td>
                    </tr>
                    <script>
                        for (rows = 0; rows <= 25; rows++) {
                            document.write(" <tr> ")
                            for (col = 1; col <= 5; col++) {
                                document.write(" <td style= padding:9px ></td> ")
                            }
                            document.write(" </tr> ")
                        }
                    </script>
                    <tr>
                        <td></td>
                        <td style="font-size: 11px ">TOTAL FEMALE</td>
                        <td style="background-color: #f0f0f0"></td>
                        <td style="background-color: #f0f0f0"></td>
                        <td style="background-color: #f0f0f0"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="font-size: 11px ">COMBINED</td>
                        <td style="background-color: #f0f0f0"></td>
                        <td style="background-color: #f0f0f0"></td>
                        <td style="background-color: #f0f0f0"></td>
                    </tr>
                </table>  
                <span style="margin-left:2rem"> <b><i>Revised as of 3/10/2016 SFRT</i></b></span>
            </div>

            <div class="side" style="margin-top: 5.5rem;">
                <table style="width: 20rem">
                    <th colspan="4">Summary Table</th>
                    <tr>
                        <th>Status</th>
                        <th>MALE</th>
                        <th>FEMALE</th>
                        <th>TOTAL</th>
                    </tr> 
                    <tr>
                        <th>PROMOTED</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Conditional</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>RETAINED</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>

                <table style="width: 20rem; margin-top: 1rem;">
                    <th colspan="4">LEARNING PROGRESS AND ACHIEVEMENT(Based on Learner'General Average) </th>
                    <tr>
                        <th style="width: 5rem">Descriptors & Grading Scale</th>
                        <th>Male</th>
                        <th>Female</th>
                        <th>Total</th>
                    </tr>
                    <tr>
                        <th>Did Not Meet Expectations(74 and below)</th>  
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Fairly Satisfactory</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Satisfactory</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
                        
                <div class="footer">
                    <div>
                        <span>PREPARED BY:</span>
                        <hr>
                        <div style="text-align: center">
                            <p>Class Adviser</p>
                            <p>(Name and Signature)</p>
                        </div>
                    </div>

                    <div>
                        <span>CERTIFIED CORRECT & SUBMITTED:</span>
                        <hr>
                        <div style="text-align: center">
                            <p>School Head</p>
                            <p>(Name and Signature)</p>
                        </div>
                    </div>

                    <div>
                        <span>REVIEWED BY:</span>
                        <hr>
                        <div style="text-align: center">
                            <p>Division Representatiive</p>
                            <p>(Name and Signature)</p>
                        </div>
                    </div>

                    <div>
                        <span>GUIDELINES:</span>
                        <p><b><i> 1. Do not include Dropouts and Transferred Out(D.O 4, 2014) </i></b></p>
                        <p>2. To be prepared by the Adviser. The Adviser should indicate the General Average based on the learner's Form 138.</p>
                        <p>3. On the summary table, reflect the total number of learners PROMOTED(Final Grade of at least <b> 75 in ALL learning areas</b>), RETAINED (Did Not Meet Expectations in <b>three(3) or more learning areas), and *CONDITIONAL (*Did Not Meet Expectations in <b>not morte than two(2) learning areas</b>) and the Learning Progress and Achievement according to the individual General Average.  All provisions on classroom assessment and the grading system in the said Order shall be in effect for all grade levels - Deped Order 29, s. 2015.)  </p>
                        <p>4. Did Not Meet Expectations of the Learning Areas. This refers to learning area/s that the learner had failed as of end of current SY. The learner may be for remediation or retention.   </p>
                        <p>5. Protocols of validation & submission is under the discretion of the Schools Division Superintendent.</p>
                    </div>

                    <div style="text-align:right;">
                        <p>School Form 5: Page __of____</p>
                    </div>
                </div>

            </div>
            <div class="side" style="width:100rem"></div>
        </div>
    </div>
    <a href="#" id="generate-sf5">Generate PDF</a>
</div>

