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
                <th rowspan="3" style="width:500px">Learner's Name (Last Name, First Name, Middle Name)</th>
                <th colspan="25">(1st row for date)</th>
                <th colspan="2" style="width:1rem">Total for the Month</th>
                <th rowspan="3" style="width: 3rem">REMARKS (If <strong>DROPPED OUT</strong>, state reason, please refer to legend number 2. If <strong>TRANSFERRED IN/OUT</strong>, write the name of School. </th>
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

                <th>ABSENT</th>
                <th>TARDY</th>  
            </tr>
            <tr>
                <td></td>

                <!-- 1st -->
                <td class="background">
                    <div>
                        <span class="top"></span>
                        <span class="bottom"></span>
                        <div class="line"></div>
                    </div>
                </td>
                <td class="background">
                    <div>
                        <span class="top"></span>
                        <span class="bottom"></span>
                        <div class="line"></div>
                    </div>
                </td>
                <td class="background">
                    <div>
                        <span class="top"></span>
                        <span class="bottom"></span>
                        <div class="line"></div>
                    </div>
                </td>
                <td class="background">
                    <div>
                        <span class="top"></span>
                        <span class="bottom"></span>
                        <div class="line"></div>
                    </div>
                </td>
                <td class="background">
                    <div>
                        <span class="top"></span>
                        <span class="bottom"></span>
                        <div class="line"></div>
                    </div>
                </td>

                <!-- 2nd -->
                <td class="background">
                    <div>
                        <span class="top"></span>
                        <span class="bottom"></span>
                        <div class="line"></div>
                    </div>
                </td>
                <td class="background">
                    <div>
                        <span class="top"></span>
                        <span class="bottom"></span>
                        <div class="line"></div>
                    </div>
                </td>
                <td class="background">
                    <div>
                        <span class="top"></span>
                        <span class="bottom"></span>
                        <div class="line"></div>
                    </div>
                </td>
                <td class="background">
                    <div>
                        <span class="top"></span>
                        <span class="bottom"></span>
                        <div class="line"></div>
                    </div>
                </td>
                <td class="background">
                    <div>
                        <span class="top"></span>
                        <span class="bottom"></span>
                        <div class="line"></div>
                    </div>
                </td>

                <!-- 3rd -->
                <td class="background">
                    <div>
                        <span class="top"></span>
                        <span class="bottom"></span>
                        <div class="line"></div>
                    </div>
                </td>
                <td class="background">
                    <div>
                        <span class="top"></span>
                        <span class="bottom"></span>
                        <div class="line"></div>
                    </div>
                </td>
                <td class="background">
                    <div>
                        <span class="top"></span>
                        <span class="bottom"></span>
                        <div class="line"></div>
                    </div>
                </td>
                <td class="background">
                    <div>
                        <span class="top"></span>
                        <span class="bottom"></span>
                        <div class="line"></div>
                    </div>
                </td>
                <td class="background">
                    <div>
                        <span class="top"></span>
                        <span class="bottom"></span>
                        <div class="line"></div>
                    </div>
                </td>

                <!-- 4th -->
                <td class="background">
                    <div>
                        <span class="top"></span>
                        <span class="bottom"></span>
                        <div class="line"></div>
                    </div>
                </td>
                <td class="background">
                    <div>
                        <span class="top"></span>
                        <span class="bottom"></span>
                        <div class="line"></div>
                    </div>
                </td>
                <td class="background">
                    <div>
                        <span class="top"></span>
                        <span class="bottom"></span>
                        <div class="line"></div>
                    </div>
                </td>
                <td class="background">
                    <div>
                        <span class="top"></span>
                        <span class="bottom"></span>
                        <div class="line"></div>
                    </div>
                </td>
                <td class="background">
                    <div>
                        <span class="top"></span>
                        <span class="bottom"></span>
                        <div class="line"></div>
                    </div>
                </td>

                <!-- 5th -->
                <td class="background">
                    <div>
                        <span class="top"></span>
                        <span class="bottom"></span>
                        <div class="line"></div>
                    </div>
                </td>
                <td class="background">
                    <div>
                        <span class="top"></span>
                        <span class="bottom"></span>
                        <div class="line"></div>
                    </div>
                </td>
                <td class="background">
                    <div>
                        <span class="top"></span>
                        <span class="bottom"></span>
                        <div class="line"></div>
                    </div>
                </td>
                <td class="background">
                    <div>
                        <span class="top"></span>
                        <span class="bottom"></span>
                        <div class="line"></div>
                    </div>
                </td>
                <td class="background">
                    <div>
                        <span class="top"></span>
                        <span class="bottom"></span>
                        <div class="line"></div>
                    </div>
                </td>

                <td></td>
                <td></td>
                <td></td>
                
            </tr>
        </table>
    </div>
    <a href="#" id="generate-sf2">Generate PDF</a>
</div>
