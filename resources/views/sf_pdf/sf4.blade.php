<style>

table {
  border-collapse: collapse;
  width: 95%;
  text-align: center;
  margin: 2rem;
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

.background {
  width: 35px;
  height: 35px;
  padding: 0;
  margin: 0;
}

.line {
  width: 2.7rem;
  height: 50px;
  border-bottom: 1px solid black;
  transform: translateY(-22.6px) translateX(-29px) rotate(-53deg);
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

m-0{
    margin: 0;
}

hr {
    margin-top: 2rem;
    width: 70%;
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
    margin-left: 5rem;
    width: 50%;
}

</style>

<script src="http://code.jquery.com/jquery-3.4.1.js"></script>
<script src="../../../../../../plugins/jquery/printThis.js"></script>

<script>
$(document).ready(function(){
  $('#generate-sf4').click(function(){
    $('#sf4').printThis({
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
    <div id="sf4">
        <div class="pdf-header">
            <img src="/png/deped_logo.png" alt="deped logo">
            <div class="sub-header">
                <div class="title">
                    <h4>School Form 4 (SF 2) School Register</h4>
                    <p>(This replaces Form 3, Form 2 & STS Form 4 - Absenteeism and Dropout Profile)</p>
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

        <table style="border: 1.5px solid black">
            <thead style="border: 1.5px solid black">
                <th rowspan="3">GRADE/YEAR LEVEL</th>
                <th rowspan="3">SECTION</th>
                <th rowspan="3">NAME OF ADVISER</th>
                <th colspan="3">REGISTERED LEARNERS(As of End of the Month</th>
                <th colspan="6">ATTENDANCE</th>
                <th colspan="9">DROPPED OUT</th>
                <th colspan="9">TRANSFERRED OUT</th>
                <th colspan="9">TRANSFERRED IN</th>
            </thead>
            <tr style="border: 1.5px solid black">
                <th rowspan="2"></th>
                <th rowspan="2"></th>
                <th rowspan="2"></th>
                <th rowspan="2">M</th>
                <th rowspan="2">F</th>
                <th rowspan="2">T</th>
                <th colspan="3">Daily Average</th>
                <th colspan="3">Percentage for the Month</th>
                <th colspan="3">(A)Cumulative as of Previous Month</th>
                <th colspan="3">(B)For the Month</th>
                <th colspan="3">(A+B)Cumulative as End of the Month</th>
                <th colspan="3">(A)Cumulative as of Previous Month</th>
                <th colspan="3">(B)For the Month</th>
                <th colspan="3">(A+B)Cumulative as End of the Month</th>
                <th colspan="3">(A)Cumulative as of Previous Month</th>
                <th colspan="3">(B)For the Month</th>
                <th colspan="3">(A+B)Cumulative as End of the Month</th>
            </tr>
            <tr style="border: 1.5px solid black">
                <th>M</th>
                <th>F</th>
                <th>T</th>

                <th>M</th>
                <th>F</th>
                <th>T</th>

                <th>M</th>
                <th>F</th>
                <th>T</th>

                <th>M</th>
                <th>F</th>
                <th>T</th>

                <th>M</th>
                <th>F</th>
                <th>T</th>

                <th>M</th>
                <th>F</th>
                <th>T</th>

                <th>M</th>
                <th>F</th>
                <th>T</th>

                <th>M</th>
                <th>F</th>
                <th>T</th>

                <th>M</th>
                <th>F</th>
                <th>T</th>

                <th>M</th>
                <th>F</th>
                <th>T</th>

                <th>M</th>
                <th>F</th>
                <th>T</th>
            </tr>

            <script>
                for (rows = 0; rows <= 17; rows++) {
                    document.write(" <tr> ")
                    for (col = 1; col <= 38; col++) {
                        document.write(" <td style= padding:6px ></td> ")
                    }
                    document.write(" </tr> ")
                }
            </script>

            <tbody  style="border: 1.5px solid black">
                <tr style="border: 1.5px solid black">
                    <th colspan="3" style="text-align: left; padding-left: 10px">ELEMENTARY/SECONDARY:</th>
                    <script>
                        for (col = 1; col <= 35; col++) {
                            document.write(" <td style= padding:6px ></td> ")
                        }
                    </script>
                </tr>
                <tr>
                    <th colspan="3">KINDER</th>
                    <script>
                        for (col = 1; col <= 35; col++) {
                            document.write(" <td style= padding:6px ></td> ")
                        }
                    </script>
                </tr>
                <tr>
                    <th colspan="3">GRADE 1/GRADE 7</th>
                    <script>
                        for (col = 1; col <= 35; col++) {
                            document.write(" <td style= padding:6px ></td> ")
                        }
                    </script>
                </tr>
                <tr>
                    <th colspan="3">GRADE 2/GRADE 8</th>
                    <script>
                        for (col = 1; col <= 35; col++) {
                            document.write(" <td style= padding:6px ></td> ")
                        }
                    </script>
                </tr>
                <tr>
                    <th colspan="3">GRADE 3/GRADE 9</th>
                    <script>
                        for (col = 1; col <= 35; col++) {
                            document.write(" <td style= padding:6px ></td> ")
                        }
                    </script>
                </tr>
                <tr>
                    <th colspan="3">GRADE 4/GRADE 10</th>
                    <script>
                        for (col = 1; col <= 35; col++) {
                            document.write(" <td style= padding:6px ></td> ")
                        }
                    </script>
                </tr>
                <tr>
                    <th colspan="3">GRADE 5/GRADE 11</th>
                    <script>
                        for (col = 1; col <= 35; col++) {
                            document.write(" <td style= padding:6px ></td> ")
                        }
                    </script>
                </tr>
                <tr>
                    <th colspan="3">GRADE 6/GRADE 12</th>
                    <script>
                        for (col = 1; col <= 35; col++) {
                            document.write(" <td style= padding:6px ></td> ")
                        }
                    </script>
                </tr>
                <tr>
                    <th colspan="3">TOTAL FOR NON-GRADED</th>
                    <script>
                        for (col = 1; col <= 35; col++) {
                            document.write(" <td style= padding:6px ></td> ")
                        }
                    </script>
                </tr>
                <tr style="border: 1.5px solid black">
                    <th colspan="3">TOTAL</th>
                    <script>
                        for (col = 1; col <= 35; col++) {
                            document.write(" <td style= padding:6px ></td> ")
                        }
                    </script>
                </tr>
            </tbody>
        </table>

        <div class="flex size-10 footer">
            <div>
                <span>GUIDELINES:</span>
                <p>1. This form shall be accomplished every end of the month using the summary box of SF2 submitted by the teachers/advisers to update figures for the month.</p>
                <p>2. Furnish the Division Office with a copy a week after June 30, October 30 & March 31. </p>
               
                <p style="margin-top: 1rem">Page ___of____ pages</p>
            </div>
            <div class="size-10 signature">
                <span>Prepared and Submitted by:</span>
                <hr>
                <div style="text-align: center">
                    <p style="margin:0; font-size: 10px"><i>(Signature of School Head over Printed Name)</i></p>
                </div>
            </div>
        </div>

    </div>
    <a href="#" id="generate-sf4">Generate PDF</a>
</div>