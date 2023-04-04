<style>

table {
  border-collapse: collapse;
  width: 30%;
  text-align: center;
  margin: 2rem;
  font-size: 11px;

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
.assessment, .assessed, .correct, {
    float: left;
}
.line{
    margin: 20px 10px;
    border-top: 1px solid black;
    width: 250px;
    font-size: 12px;
    text-align: center;
}

.flex {
    display: flex;
}

.footer {
    margin: 20px;
    margin-left: 2rem;
}


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
        <div class="pdf-header">
            <img src="/png/deped_logo.png" alt="deped logo">
            <div class="sub-header">
                <div class="title">
                    <h4>School Form 6 (SF6)</h4>
                    <h4>Summarized Report on Promotion and Learning Progress & Achievement</h4>
                    <p><i>Revised to conform with the instructions of Deped Order 8, s. 2015<</i></p>
                </div>
                <div class="info">
                    <div class="sub-info">
                        <div class="school-id">
                            <span class="bold">School ID:</span>
                            <span>00111</span>
                        </div>
                        <div class="school-name">
                            <span class="bold">School Name:</span>
                            <span>Sorsogon National High School</span>
                        </div>
                    </div>
                    <div class="sub-info">
                        <div class="school-id">
                            <span class="bold">Region:</span>
                            <span>V</span>
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
                    </div>
                    <div class="sub-info">
                        <div class="School Year">
                            <span class="bold">School Year:</span>
                            <span>{{$schoolyear->year_start}}-{{$schoolyear->year_end}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <table style="width:90%">
            <tr>
                <th rowspan="2">SUMMARY TABLE</th>
                <th colspan="3">GRADE 1 / GRADE 7</th>
                <th colspan="3">GRADE 2 / GRADE 8</th>
                <th colspan="3">GRADE 3 / GRADE 9</th>
                <th colspan="3">GRADE 4 / GRADE 10</th>
                <th colspan="3">GRADE 5 / GRADE 11</th>
                <th colspan="3">GRADE 6 / GRADE 112</th>
                <th colspan="3">TOTAL</th>
            </tr>
            <tr>
                <th>MALE</th>
                <th>FEMALE</th>
                <th>TOTAL</th>

                <th>MALE</th>
                <th>FEMALE</th>
                <th>TOTAL</th>

                <th>MALE</th>
                <th>FEMALE</th>
                <th>TOTAL</th>

                <th>MALE</th>
                <th>FEMALE</th>
                <th>TOTAL</th>

                <th>MALE</th>
                <th>FEMALE</th>
                <th>TOTAL</th>

                <th>MALE</th>
                <th>FEMALE</th>
                <th>TOTAL</th>

                <th>MALE</th>
                <th>FEMALE</th>
                <th>TOTAL</th>
            </tr>
            <tr>
                <th>PROMOTED</th>

                <td>{{$gr7_records->where('action_taken', 'Promoted')->where('sex', 'M')->count()}}</td>
                <td>{{$gr7_records->where('action_taken', 'Promoted')->where('sex', 'F')->count()}}</td>
                <td>{{$gr7_records->where('action_taken', 'Promoted')->count()}}</td>

                <td>{{$gr8_records->where('action_taken', 'Promoted')->where('sex', 'M')->count()}}</td>
                <td>{{$gr8_records->where('action_taken', 'Promoted')->where('sex', 'F')->count()}}</td>
                <td>{{$gr8_records->where('action_taken', 'Promoted')->count()}}</td>

                <td>{{$gr9_records->where('action_taken', 'Promoted')->where('sex', 'M')->count()}}</td>
                <td>{{$gr9_records->where('action_taken', 'Promoted')->where('sex', 'F')->count()}}</td>
                <td>{{$gr9_records->where('action_taken', 'Promoted')->count()}}</td>

                <td>{{$gr10_records->where('action_taken', 'Promoted')->where('sex', 'M')->count()}}</td>
                <td>{{$gr10_records->where('action_taken', 'Promoted')->where('sex', 'F')->count()}}</td>
                <td>{{$gr10_records->where('action_taken', 'Promoted')->count()}}</td>

                <td></td>
                <td></td>
                <td></td>

                <td></td>
                <td></td>
                <td></td>

                <td>{{$gr7_records->where('action_taken', 'Promoted')->where('sex', 'M')->count() + $gr8_records->where('action_taken', 'Promoted')->where('sex', 'M')->count() + $gr9_records->where('action_taken', 'Promoted')->where('sex', 'M')->count() + $gr10_records->where('action_taken', 'Promoted')->where('sex', 'M')->count()}}</td>
                <td>{{$gr7_records->where('action_taken', 'Promoted')->where('sex', 'F')->count() + $gr8_records->where('action_taken', 'Promoted')->where('sex', 'F')->count() + $gr9_records->where('action_taken', 'Promoted')->where('sex', 'F')->count() + $gr10_records->where('action_taken', 'Promoted')->where('sex', 'F')->count()}}</td>
                <td>{{$gr7_records->where('action_taken', 'Promoted')->count() + $gr8_records->where('action_taken', 'Promoted')->count() + $gr9_records->where('action_taken', 'Promoted')->count() + $gr10_records->where('action_taken', 'Promoted')->count()}}</td>

            </tr>
            <tr>
                <th>CONDITIONAL</th>

                <td>{{$gr7_records->where('action_taken', 'Conditional')->where('sex', 'M')->count()}}</td>
                <td>{{$gr7_records->where('action_taken', 'Conditional')->where('sex', 'F')->count()}}</td>
                <td>{{$gr7_records->where('action_taken', 'Conditional')->where('sex', 'M')->count() + $gr7_records->where('action_taken', 'Conditional')->where('sex', 'F')->count()}}</td>

                <td>{{$gr8_records->where('action_taken', 'Conditional')->where('sex', 'M')->count()}}</td>
                <td>{{$gr8_records->where('action_taken', 'Conditional')->where('sex', 'F')->count()}}</td>
                <td>{{$gr8_records->where('action_taken', 'Conditional')->where('sex', 'M')->count() + $gr8_records->where('action_taken', 'Conditional')->where('sex', 'F')->count()}}</td>

                <td>{{$gr9_records->where('action_taken', 'Conditional')->where('sex', 'M')->count()}}</td>
                <td>{{$gr9_records->where('action_taken', 'Conditional')->where('sex', 'F')->count()}}</td>
                <td>{{$gr9_records->where('action_taken', 'Conditional')->where('sex', 'M')->count() + $gr9_records->where('action_taken', 'Conditional')->where('sex', 'F')->count()}}</td>

                <td>{{$gr10_records->where('action_taken', 'Conditional')->where('sex', 'M')->count()}}</td>
                <td>{{$gr10_records->where('action_taken', 'Conditional')->where('sex', 'F')->count()}}</td>
                <td>{{$gr10_records->where('action_taken', 'Conditional')->where('sex', 'M')->count() + $gr10_records->where('action_taken', 'Conditional')->where('sex', 'F')->count()}}</td>

                <td></td>
                <td></td>
                <td></td>

                <td></td>
                <td></td>
                <td></td>

                <td>{{$gr7_records->where('action_taken', 'Conditional')->where('sex', 'M')->count() + $gr8_records->where('action_taken', 'Conditional')->where('sex', 'M')->count() + $gr9_records->where('action_taken', 'Conditional')->where('sex', 'M')->count() + $gr10_records->where('action_taken', 'Conditional')->where('sex', 'M')->count()}}</td>
                <td>{{$gr7_records->where('action_taken', 'Conditional')->where('sex', 'F')->count() + $gr8_records->where('action_taken', 'Conditional')->where('sex', 'F')->count() + $gr9_records->where('action_taken', 'Conditional')->where('sex', 'F')->count() + $gr10_records->where('action_taken', 'Conditional')->where('sex', 'F')->count()}}</td>
                <td>{{$gr7_records->where('action_taken', 'Conditional')->count() + $gr8_records->where('action_taken', 'Conditional')->count() + $gr9_records->where('action_taken', 'Conditional')->count() + $gr10_records->where('action_taken', 'Conditional')->count()}}</td>

            </tr>
            <tr>
                <th>RETAINED</th>

                <td>{{$gr7_records->where('action_taken', 'Retained')->where('sex', 'M')->count()}}</td>
                <td>{{$gr7_records->where('action_taken', 'Retained')->where('sex', 'F')->count()}}</td>
                <td>{{$gr7_records->where('action_taken', 'Retained')->where('sex', 'M')->count() + $gr7_records->where('action_taken', 'Retained')->where('sex', 'F')->count()}}</td>

                <td>{{$gr8_records->where('action_taken', 'Retained')->where('sex', 'M')->count()}}</td>
                <td>{{$gr8_records->where('action_taken', 'Retained')->where('sex', 'F')->count()}}</td>
                <td>{{$gr8_records->where('action_taken', 'Retained')->where('sex', 'M')->count() + $gr8_records->where('action_taken', 'Retained')->where('sex', 'F')->count()}}</td>

                <td>{{$gr9_records->where('action_taken', 'Retained')->where('sex', 'M')->count()}}</td>
                <td>{{$gr9_records->where('action_taken', 'Retained')->where('sex', 'F')->count()}}</td>
                <td>{{$gr9_records->where('action_taken', 'Retained')->where('sex', 'M')->count() + $gr9_records->where('action_taken', 'Retained')->where('sex', 'F')->count()}}</td>

                <td>{{$gr10_records->where('action_taken', 'Retained')->where('sex', 'M')->count()}}</td>
                <td>{{$gr10_records->where('action_taken', 'Retained')->where('sex', 'F')->count()}}</td>
                <td>{{$gr10_records->where('action_taken', 'Retained')->where('sex', 'M')->count() + $gr10_records->where('action_taken', 'Retained')->where('sex', 'F')->count()}}</td>

                <td></td>
                <td></td>
                <td></td>

                <td></td>
                <td></td>
                <td></td>

                <td>{{$gr7_records->where('action_taken', 'Retained')->where('sex', 'M')->count() + $gr8_records->where('action_taken', 'Retained')->where('sex', 'M')->count() + $gr9_records->where('action_taken', 'Retained')->where('sex', 'M')->count() + $gr10_records->where('action_taken', 'Retained')->where('sex', 'M')->count()}}</td>
                <td>{{$gr7_records->where('action_taken', 'Retained')->where('sex', 'F')->count() + $gr8_records->where('action_taken', 'Retained')->where('sex', 'F')->count() + $gr9_records->where('action_taken', 'Retained')->where('sex', 'F')->count() + $gr10_records->where('action_taken', 'Retained')->where('sex', 'F')->count()}}</td>
                <td>{{$gr7_records->where('action_taken', 'Retained')->count() + $gr8_records->where('action_taken', 'Retained')->count() + $gr9_records->where('action_taken', 'Retained')->count() + $gr10_records->where('action_taken', 'Retained')->count()}}</td>

            </tr>
            <tr>
                <th rowspan="2">LEARNING PROGRESS & <br> ACHIEVEMENT (based on Learners'<br> General Average)</th>
            </tr>
            <tr>
                <th>MALE</th>
                <th>FEMALE</th>
                <th>TOTAL</th>

                <th>MALE</th>
                <th>FEMALE</th>
                <th>TOTAL</th>

                <th>MALE</th>
                <th>FEMALE</th>
                <th>TOTAL</th>

                <th>MALE</th>
                <th>FEMALE</th>
                <th>TOTAL</th>

                <th>MALE</th>
                <th>FEMALE</th>
                <th>TOTAL</th>

                <th>MALE</th>
                <th>FEMALE</th>
                <th>TOTAL</th>

                <th>MALE</th>
                <th>FEMALE</th>
                <th>TOTAL</th>
            </tr>
            <tr>
                <th>DID NOT MEET EXPECTATIONS <br> (74 and below)</th>

                <td>{{$gr7_records->where('gen_average', '<=', '74')->where('sex', 'M')->count()}}</td>
                <td>{{$gr7_records->where('gen_average', '<=', '74')->where('sex', 'F')->count()}}</td>
                <td>{{$gr7_records->where('gen_average', '<=', '74')->where('sex', 'M')->count() + $gr7_records->where('gen_average', '<=', '74')->where('sex', 'F')->count()}}</td>

                <td>{{$gr8_records->where('gen_average', '<=', '74')->where('sex', 'M')->count()}}</td>
                <td>{{$gr8_records->where('gen_average', '<=', '74')->where('sex', 'F')->count()}}</td>
                <td>{{$gr8_records->where('gen_average', '<=', '74')->where('sex', 'M')->count() + $gr8_records->where('gen_average', '<=', '74')->where('sex', 'F')->count()}}</td>

                <td>{{$gr9_records->where('gen_average', '<=', '74')->where('sex', 'M')->count()}}</td>
                <td>{{$gr9_records->where('gen_average', '<=', '74')->where('sex', 'F')->count()}}</td>
                <td>{{$gr9_records->where('gen_average', '<=', '74')->where('sex', 'M')->count() + $gr9_records->where('gen_average', '<=', '74')->where('sex', 'F')->count()}}</td>

                <td>{{$gr10_records->where('gen_average', '<=', '74')->where('sex', 'M')->count()}}</td>
                <td>{{$gr10_records->where('gen_average', '<=', '74')->where('sex', 'F')->count()}}</td>
                <td>{{$gr10_records->where('gen_average', '<=', '74')->where('sex', 'M')->count() + $gr10_records->where('gen_average', '<=', '74')->where('sex', 'F')->count()}}</td>

                <td></td>
                <td></td>
                <td></td>

                <td></td>
                <td></td>
                <td></td>

                <td>{{$gr7_records->where('gen_average', '<=', '74')->where('sex', 'M')->count() + $gr8_records->where('gen_average', '<=', '74')->where('sex', 'M')->count() + $gr9_records->where('gen_average', '<=', '74')->where('sex', 'M')->count() + $gr10_records->where('gen_average', '<=', '74')->where('sex', 'M')->count()}}</td>
                <td>{{$gr7_records->where('gen_average', '<=', '74')->where('sex', 'F')->count() + $gr8_records->where('gen_average', '<=', '74')->where('sex', 'F')->count() + $gr9_records->where('gen_average', '<=', '74')->where('sex', 'F')->count() + $gr10_records->where('gen_average', '<=', '74')->where('sex', 'F')->count()}}</td>
                <td>{{$gr7_records->where('gen_average', '<=', '74')->count() + $gr8_records->where('gen_average', '<=', '74')->count() + $gr9_records->where('gen_average', '<=', '74')->count() + $gr10_records->where('gen_average', '<=', '74')->count()}}</td>

            </tr>
            <tr>
                <th>FAIRLY SATISFACTORY <br> (75-79)</th>

                <td>{{$gr7_records->where('gen_average', '>=', '75')->where('gen_average', '<=', '79')->where('sex', 'M')->count()}}</td>
                <td>{{$gr7_records->where('gen_average', '>=', '75')->where('gen_average', '<=', '79')->where('sex', 'F')->count()}}</td>
                <td>{{$gr7_records->where('gen_average', '>=', '75')->where('gen_average', '<=', '79')->where('sex', 'M')->count() + $gr7_records->where('gen_average', '>=', '75')->where('gen_average', '<=', '79')->where('sex', 'F')->count()}}</td>

                <td>{{$gr8_records->where('gen_average', '>=', '75')->where('gen_average', '<=', '79')->where('sex', 'M')->count()}}</td>
                <td>{{$gr8_records->where('gen_average', '>=', '75')->where('gen_average', '<=', '79')->where('sex', 'F')->count()}}</td>
                <td>{{$gr8_records->where('gen_average', '>=', '75')->where('gen_average', '<=', '79')->where('sex', 'M')->count() + $gr8_records->where('gen_average', '>=', '75')->where('gen_average', '<=', '79')->where('sex', 'F')->count()}}</td>

                <td>{{$gr9_records->where('gen_average', '>=', '75')->where('gen_average', '<=', '79')->where('sex', 'M')->count()}}</td>
                <td>{{$gr9_records->where('gen_average', '>=', '75')->where('gen_average', '<=', '79')->where('sex', 'F')->count()}}</td>
                <td>{{$gr9_records->where('gen_average', '>=', '75')->where('gen_average', '<=', '79')->where('sex', 'M')->count() + $gr9_records->where('gen_average', '>=', '75')->where('gen_average', '<=', '79')->where('sex', 'F')->count()}}</td>

                <td>{{$gr10_records->where('gen_average', '>=', '75')->where('gen_average', '<=', '79')->where('sex', 'M')->count()}}</td>
                <td>{{$gr10_records->where('gen_average', '>=', '75')->where('gen_average', '<=', '79')->where('sex', 'F')->count()}}</td>
                <td>{{$gr10_records->where('gen_average', '>=', '75')->where('gen_average', '<=', '79')->where('sex', 'M')->count() + $gr10_records->where('gen_average', '>=', '75')->where('gen_average', '<=', '79')->where('sex', 'F')->count()}}</td>

                <td></td>
                <td></td>
                <td></td>

                <td></td>
                <td></td>
                <td></td>

                <td>{{$gr7_records->where('gen_average', '>=', '75')->where('gen_average', '<=', '79')->where('sex', 'M')->count() + $gr8_records->where('gen_average', '>=', '75')->where('gen_average', '<=', '79')->where('sex', 'M')->count() + $gr9_records->where('gen_average', '>=', '75')->where('gen_average', '<=', '79')->where('sex', 'M')->count() + $gr10_records->where('gen_average', '>=', '75')->where('gen_average', '<=', '79')->where('sex', 'M')->count()}}</td>
                <td>{{$gr7_records->where('gen_average', '>=', '75')->where('gen_average', '<=', '79')->where('sex', 'F')->count() + $gr8_records->where('gen_average', '>=', '75')->where('gen_average', '<=', '79')->where('sex', 'F')->count() + $gr9_records->where('gen_average', '>=', '75')->where('gen_average', '<=', '79')->where('sex', 'F')->count() + $gr10_records->where('gen_average', '>=', '75')->where('gen_average', '<=', '79')->where('sex', 'F')->count()}}</td>
                <td>{{$gr7_records->where('gen_average', '>=', '75')->where('gen_average', '<=', '79')->count() + $gr8_records->where('gen_average', '>=', '75')->where('gen_average', '<=', '79')->count() + $gr9_records->where('gen_average', '>=', '75')->where('gen_average', '<=', '79')->count() + $gr10_records->where('gen_average', '>=', '75')->where('gen_average', '<=', '79')->count()}}</td>

            </tr>
            <tr>
                <th>SATISFACTORY <br> (80-84)</th>

                <td>{{$gr7_records->where('gen_average', '>=', '80')->where('gen_average', '<=', '84')->where('sex', 'M')->count()}}</td>
                <td>{{$gr7_records->where('gen_average', '>=', '80')->where('gen_average', '<=', '84')->where('sex', 'F')->count()}}</td>
                <td>{{$gr7_records->where('gen_average', '>=', '80')->where('gen_average', '<=', '84')->where('sex', 'M')->count() + $gr7_records->where('gen_average', '>=', '80')->where('gen_average', '<=', '84')->where('sex', 'F')->count()}}</td>

                <td>{{$gr8_records->where('gen_average', '>=', '80')->where('gen_average', '<=', '84')->where('sex', 'M')->count()}}</td>
                <td>{{$gr8_records->where('gen_average', '>=', '80')->where('gen_average', '<=', '84')->where('sex', 'F')->count()}}</td>
                <td>{{$gr8_records->where('gen_average', '>=', '80')->where('gen_average', '<=', '84')->where('sex', 'M')->count() + $gr8_records->where('gen_average', '>=', '80')->where('gen_average', '<=', '84')->where('sex', 'F')->count()}}</td>

                <td>{{$gr9_records->where('gen_average', '>=', '80')->where('gen_average', '<=', '84')->where('sex', 'M')->count()}}</td>
                <td>{{$gr9_records->where('gen_average', '>=', '80')->where('gen_average', '<=', '84')->where('sex', 'F')->count()}}</td>
                <td>{{$gr9_records->where('gen_average', '>=', '80')->where('gen_average', '<=', '84')->where('sex', 'M')->count() + $gr9_records->where('gen_average', '>=', '80')->where('gen_average', '<=', '84')->where('sex', 'F')->count()}}</td>

                <td>{{$gr10_records->where('gen_average', '>=', '80')->where('gen_average', '<=', '84')->where('sex', 'M')->count()}}</td>
                <td>{{$gr10_records->where('gen_average', '>=', '80')->where('gen_average', '<=', '84')->where('sex', 'F')->count()}}</td>
                <td>{{$gr10_records->where('gen_average', '>=', '80')->where('gen_average', '<=', '84')->where('sex', 'M')->count() + $gr10_records->where('gen_average', '>=', '80')->where('gen_average', '<=', '84')->where('sex', 'F')->count()}}</td>

                <td></td>
                <td></td>
                <td></td>

                <td></td>
                <td></td>
                <td></td>

                <td>{{$gr7_records->where('gen_average', '>=', '80')->where('gen_average', '<=', '84')->where('sex', 'M')->count() + $gr8_records->where('gen_average', '>=', '80')->where('gen_average', '<=', '84')->where('sex', 'M')->count() + $gr9_records->where('gen_average', '>=', '80')->where('gen_average', '<=', '84')->where('sex', 'M')->count() + $gr10_records->where('gen_average', '>=', '80')->where('gen_average', '<=', '84')->where('sex', 'M')->count()}}</td>
                <td>{{$gr7_records->where('gen_average', '>=', '80')->where('gen_average', '<=', '84')->where('sex', 'F')->count() + $gr8_records->where('gen_average', '>=', '80')->where('gen_average', '<=', '84')->where('sex', 'F')->count() + $gr9_records->where('gen_average', '>=', '80')->where('gen_average', '<=', '84')->where('sex', 'F')->count() + $gr10_records->where('gen_average', '>=', '80')->where('gen_average', '<=', '84')->where('sex', 'F')->count()}}</td>
                <td>{{$gr7_records->where('gen_average', '>=', '80')->where('gen_average', '<=', '84')->count() + $gr8_records->where('gen_average', '>=', '80')->where('gen_average', '<=', '84')->count() + $gr9_records->where('gen_average', '>=', '80')->where('gen_average', '<=', '84')->count() + $gr10_records->where('gen_average', '>=', '80')->where('gen_average', '<=', '84')->count()}}</td>

            </tr>
            <tr>
                <th>VERY SATISFACTORY <br> (85-89)</th>

                <td>{{$gr7_records->where('gen_average', '>=', '85')->where('gen_average', '<=', '89')->where('sex', 'M')->count()}}</td>
                <td>{{$gr7_records->where('gen_average', '>=', '85')->where('gen_average', '<=', '89')->where('sex', 'F')->count()}}</td>
                <td>{{$gr7_records->where('gen_average', '>=', '85')->where('gen_average', '<=', '89')->where('sex', 'M')->count() + $gr7_records->where('gen_average', '>=', '85')->where('gen_average', '<=', '89')->where('sex', 'F')->count()}}</td>

                <td>{{$gr8_records->where('gen_average', '>=', '85')->where('gen_average', '<=', '89')->where('sex', 'M')->count()}}</td>
                <td>{{$gr8_records->where('gen_average', '>=', '85')->where('gen_average', '<=', '89')->where('sex', 'F')->count()}}</td>
                <td>{{$gr8_records->where('gen_average', '>=', '85')->where('gen_average', '<=', '89')->where('sex', 'M')->count() + $gr8_records->where('gen_average', '>=', '85')->where('gen_average', '<=', '89')->where('sex', 'F')->count()}}</td>

                <td>{{$gr9_records->where('gen_average', '>=', '85')->where('gen_average', '<=', '89')->where('sex', 'M')->count()}}</td>
                <td>{{$gr9_records->where('gen_average', '>=', '85')->where('gen_average', '<=', '89')->where('sex', 'F')->count()}}</td>
                <td>{{$gr9_records->where('gen_average', '>=', '85')->where('gen_average', '<=', '89')->where('sex', 'M')->count() + $gr9_records->where('gen_average', '>=', '85')->where('gen_average', '<=', '89')->where('sex', 'F')->count()}}</td>

                <td>{{$gr10_records->where('gen_average', '>=', '85')->where('gen_average', '<=', '89')->where('sex', 'M')->count()}}</td>
                <td>{{$gr10_records->where('gen_average', '>=', '85')->where('gen_average', '<=', '89')->where('sex', 'F')->count()}}</td>
                <td>{{$gr10_records->where('gen_average', '>=', '85')->where('gen_average', '<=', '89')->where('sex', 'M')->count() + $gr10_records->where('gen_average', '>=', '85')->where('gen_average', '<=', '89')->where('sex', 'F')->count()}}</td>

                <td></td>
                <td></td>
                <td></td>

                <td></td>
                <td></td>
                <td></td>

                <td>{{$gr7_records->where('gen_average', '>=', '85')->where('gen_average', '<=', '89')->where('sex', 'M')->count() + $gr8_records->where('gen_average', '>=', '85')->where('gen_average', '<=', '89')->where('sex', 'M')->count() + $gr9_records->where('gen_average', '>=', '85')->where('gen_average', '<=', '89')->where('sex', 'M')->count() + $gr10_records->where('gen_average', '>=', '85')->where('gen_average', '<=', '89')->where('sex', 'M')->count()}}</td>
                <td>{{$gr7_records->where('gen_average', '>=', '85')->where('gen_average', '<=', '89')->where('sex', 'F')->count() + $gr8_records->where('gen_average', '>=', '85')->where('gen_average', '<=', '89')->where('sex', 'F')->count() + $gr9_records->where('gen_average', '>=', '85')->where('gen_average', '<=', '89')->where('sex', 'F')->count() + $gr10_records->where('gen_average', '>=', '85')->where('gen_average', '<=', '89')->where('sex', 'F')->count()}}</td>
                <td>{{$gr7_records->where('gen_average', '>=', '85')->where('gen_average', '<=', '89')->count() + $gr8_records->where('gen_average', '>=', '85')->where('gen_average', '<=', '89')->count() + $gr9_records->where('gen_average', '>=', '85')->where('gen_average', '<=', '89')->count() + $gr10_records->where('gen_average', '>=', '85')->where('gen_average', '<=', '89')->count()}}</td>

            </tr>
            <tr>
                <th>OUTSTANDING <br> (90-100)</th>

                <td>{{$gr7_records->where('gen_average', '>=', '90')->where('gen_average', '<=', '100')->where('sex', 'M')->count()}}</td>
                <td>{{$gr7_records->where('gen_average', '>=', '90')->where('gen_average', '<=', '100')->where('sex', 'F')->count()}}</td>
                <td>{{$gr7_records->where('gen_average', '>=', '90')->where('gen_average', '<=', '100')->where('sex', 'M')->count() + $gr7_records->where('gen_average', '>=', '90')->where('gen_average', '<=', '100')->where('sex', 'F')->count()}}</td>

                <td>{{$gr8_records->where('gen_average', '>=', '90')->where('gen_average', '<=', '100')->where('sex', 'M')->count()}}</td>
                <td>{{$gr8_records->where('gen_average', '>=', '90')->where('gen_average', '<=', '100')->where('sex', 'F')->count()}}</td>
                <td>{{$gr8_records->where('gen_average', '>=', '90')->where('gen_average', '<=', '100')->where('sex', 'M')->count() + $gr8_records->where('gen_average', '>=', '90')->where('gen_average', '<=', '100')->where('sex', 'F')->count()}}</td>

                <td>{{$gr9_records->where('gen_average', '>=', '90')->where('gen_average', '<=', '100')->where('sex', 'M')->count()}}</td>
                <td>{{$gr9_records->where('gen_average', '>=', '90')->where('gen_average', '<=', '100')->where('sex', 'F')->count()}}</td>
                <td>{{$gr9_records->where('gen_average', '>=', '90')->where('gen_average', '<=', '100')->where('sex', 'M')->count() + $gr9_records->where('gen_average', '>=', '90')->where('gen_average', '<=', '100')->where('sex', 'F')->count()}}</td>

                <td>{{$gr10_records->where('gen_average', '>=', '90')->where('gen_average', '<=', '100')->where('sex', 'M')->count()}}</td>
                <td>{{$gr10_records->where('gen_average', '>=', '90')->where('gen_average', '<=', '100')->where('sex', 'F')->count()}}</td>
                <td>{{$gr10_records->where('gen_average', '>=', '90')->where('gen_average', '<=', '100')->where('sex', 'M')->count() + $gr10_records->where('gen_average', '>=', '90')->where('gen_average', '<=', '100')->where('sex', 'F')->count()}}</td>

                <td></td>
                <td></td>
                <td></td>

                <td></td>
                <td></td>
                <td></td>

                <td>{{$gr7_records->where('gen_average', '>=', '90')->where('gen_average', '<=', '100')->where('sex', 'M')->count() + $gr8_records->where('gen_average', '>=', '90')->where('gen_average', '<=', '100')->where('sex', 'M')->count() + $gr9_records->where('gen_average', '>=', '90')->where('gen_average', '<=', '100')->where('sex', 'M')->count() + $gr10_records->where('gen_average', '>=', '90')->where('gen_average', '<=', '100')->where('sex', 'M')->count()}}</td>
                <td>{{$gr7_records->where('gen_average', '>=', '90')->where('gen_average', '<=', '100')->where('sex', 'F')->count() + $gr8_records->where('gen_average', '>=', '90')->where('gen_average', '<=', '100')->where('sex', 'F')->count() + $gr9_records->where('gen_average', '>=', '90')->where('gen_average', '<=', '100')->where('sex', 'F')->count() + $gr10_records->where('gen_average', '>=', '90')->where('gen_average', '<=', '100')->where('sex', 'F')->count()}}</td>
                <td>{{$gr7_records->where('gen_average', '>=', '90')->where('gen_average', '<=', '100')->count() + $gr8_records->where('gen_average', '>=', '90')->where('gen_average', '<=', '100')->count() + $gr9_records->where('gen_average', '>=', '90')->where('gen_average', '<=', '100')->count() + $gr10_records->where('gen_average', '>=', '90')->where('gen_average', '<=', '100')->count()}}</td>

            </tr>
            <tr>
                <th>TOTAL</th>

                <td>{{$gr7_records->where('gen_average', '<=', '74')->where('sex', 'M')->count() + $gr7_records->where('gen_average', '>=', '75')->where('gen_average', '<=', '79')->where('sex', 'M')->count() + $gr7_records->where('gen_average', '>=', '80')->where('gen_average', '<=', '84')->where('sex', 'M')->count() + $gr7_records->where('gen_average', '>=', '85')->where('gen_average', '<=', '89')->where('sex', 'M')->count() + $gr7_records->where('gen_average', '>=', '90')->where('gen_average', '<=', '100')->where('sex', 'M')->count()}}</td>
                <td>{{$gr7_records->where('gen_average', '<=', '74')->where('sex', 'F')->count() + $gr7_records->where('gen_average', '>=', '75')->where('gen_average', '<=', '79')->where('sex', 'F')->count() + $gr7_records->where('gen_average', '>=', '80')->where('gen_average', '<=', '84')->where('sex', 'F')->count() + $gr7_records->where('gen_average', '>=', '85')->where('gen_average', '<=', '89')->where('sex', 'F')->count() + $gr7_records->where('gen_average', '>=', '90')->where('gen_average', '<=', '100')->where('sex', 'F')->count()}}</td>
                <td>{{$gr7_records->where('gen_average', '<=', '74')->count() + $gr7_records->where('gen_average', '>=', '75')->where('gen_average', '<=', '79')->count() + $gr7_records->where('gen_average', '>=', '80')->where('gen_average', '<=', '84')->count() + $gr7_records->where('gen_average', '>=', '85')->where('gen_average', '<=', '89')->count() + $gr7_records->where('gen_average', '>=', '90')->where('gen_average', '<=', '100')->count()}}</td>

                <td>{{$gr8_records->where('gen_average', '<=', '74')->where('sex', 'M')->count() + $gr8_records->where('gen_average', '>=', '75')->where('gen_average', '<=', '79')->where('sex', 'M')->count() + $gr8_records->where('gen_average', '>=', '80')->where('gen_average', '<=', '84')->where('sex', 'M')->count() + $gr8_records->where('gen_average', '>=', '85')->where('gen_average', '<=', '89')->where('sex', 'M')->count() + $gr8_records->where('gen_average', '>=', '90')->where('gen_average', '<=', '100')->where('sex', 'M')->count()}}</td>
                <td>{{$gr8_records->where('gen_average', '<=', '74')->where('sex', 'F')->count() + $gr8_records->where('gen_average', '>=', '75')->where('gen_average', '<=', '79')->where('sex', 'F')->count() + $gr8_records->where('gen_average', '>=', '80')->where('gen_average', '<=', '84')->where('sex', 'F')->count() + $gr8_records->where('gen_average', '>=', '85')->where('gen_average', '<=', '89')->where('sex', 'F')->count() + $gr8_records->where('gen_average', '>=', '90')->where('gen_average', '<=', '100')->where('sex', 'F')->count()}}</td>
                <td>{{$gr8_records->where('gen_average', '<=', '74')->count() + $gr8_records->where('gen_average', '>=', '75')->where('gen_average', '<=', '79')->count() + $gr8_records->where('gen_average', '>=', '80')->where('gen_average', '<=', '84')->count() + $gr8_records->where('gen_average', '>=', '85')->where('gen_average', '<=', '89')->count() + $gr8_records->where('gen_average', '>=', '90')->where('gen_average', '<=', '100')->count()}}</td>

                <td>{{$gr9_records->where('gen_average', '<=', '74')->where('sex', 'M')->count() + $gr9_records->where('gen_average', '>=', '75')->where('gen_average', '<=', '79')->where('sex', 'M')->count() + $gr9_records->where('gen_average', '>=', '80')->where('gen_average', '<=', '84')->where('sex', 'M')->count() + $gr9_records->where('gen_average', '>=', '85')->where('gen_average', '<=', '89')->where('sex', 'M')->count() + $gr9_records->where('gen_average', '>=', '90')->where('gen_average', '<=', '100')->where('sex', 'M')->count()}}</td>
                <td>{{$gr9_records->where('gen_average', '<=', '74')->where('sex', 'F')->count() + $gr9_records->where('gen_average', '>=', '75')->where('gen_average', '<=', '79')->where('sex', 'F')->count() + $gr9_records->where('gen_average', '>=', '80')->where('gen_average', '<=', '84')->where('sex', 'F')->count() + $gr9_records->where('gen_average', '>=', '85')->where('gen_average', '<=', '89')->where('sex', 'F')->count() + $gr9_records->where('gen_average', '>=', '90')->where('gen_average', '<=', '100')->where('sex', 'F')->count()}}</td>
                <td>{{$gr9_records->where('gen_average', '<=', '74')->count() + $gr9_records->where('gen_average', '>=', '75')->where('gen_average', '<=', '79')->count() + $gr9_records->where('gen_average', '>=', '80')->where('gen_average', '<=', '84')->count() + $gr9_records->where('gen_average', '>=', '85')->where('gen_average', '<=', '89')->count() + $gr9_records->where('gen_average', '>=', '90')->where('gen_average', '<=', '100')->count()}}</td>

                <td>{{$gr10_records->where('gen_average', '<=', '74')->where('sex', 'M')->count() + $gr10_records->where('gen_average', '>=', '75')->where('gen_average', '<=', '79')->where('sex', 'M')->count() + $gr10_records->where('gen_average', '>=', '80')->where('gen_average', '<=', '84')->where('sex', 'M')->count() + $gr10_records->where('gen_average', '>=', '85')->where('gen_average', '<=', '89')->where('sex', 'M')->count() + $gr10_records->where('gen_average', '>=', '90')->where('gen_average', '<=', '100')->where('sex', 'M')->count()}}</td>
                <td>{{$gr10_records->where('gen_average', '<=', '74')->where('sex', 'F')->count() + $gr10_records->where('gen_average', '>=', '75')->where('gen_average', '<=', '79')->where('sex', 'F')->count() + $gr10_records->where('gen_average', '>=', '80')->where('gen_average', '<=', '84')->where('sex', 'F')->count() + $gr10_records->where('gen_average', '>=', '85')->where('gen_average', '<=', '89')->where('sex', 'F')->count() + $gr10_records->where('gen_average', '>=', '90')->where('gen_average', '<=', '100')->where('sex', 'F')->count()}}</td>
                <td>{{$gr10_records->where('gen_average', '<=', '74')->count() + $gr10_records->where('gen_average', '>=', '75')->where('gen_average', '<=', '79')->count() + $gr10_records->where('gen_average', '>=', '80')->where('gen_average', '<=', '84')->count() + $gr10_records->where('gen_average', '>=', '85')->where('gen_average', '<=', '89')->count() + $gr10_records->where('gen_average', '>=', '90')->where('gen_average', '<=', '100')->count()}}</td>

                <td></td>
                <td></td>
                <td></td>

                <td></td>
                <td></td>
                <td></td>

                <td>{{$gr7_records->where('sex', 'M')->count() + 
                    $gr8_records->where('sex', 'M')->count() + 
                    $gr9_records->where('sex', 'M')->count() + 
                    $gr10_records->where('sex', 'M')->count()}}
                </td>
                <td>{{$gr7_records->where('sex', 'F')->count() + 
                    $gr8_records->where('sex', 'F')->count() + 
                    $gr9_records->where('sex', 'F')->count() + 
                    $gr10_records->where('sex', 'F')->count()}}
                </td>
                <td>{{$gr7_records->count() + 
                    $gr8_records->count() + 
                    $gr9_records->count() + 
                    $gr10_records->count()}}
                </td>

            </tr>
        </table>
        <span style="margin-left:2rem"> <b><i>Revised as of 3/10/2016 SFRT</i></b></span>
        <div class="footer flex">
                <span class="assessment">Prepared and Submitted by:</span>
                <span class="line">SCHOOL HEAD</span>
                <span class="assessed">Reviewed & Validated by:</span>
                <span class="line">DIVISION REPRESENTATIVE</span>
                <span class="correct">Noted by:</span>
                <span class="line">SCHOOLS DIVISION SUPERINTENDENT</span>
        </div>
            <div class="footer">
                <span style="font-weight:bold">GUIDELINES:</span>
                <p>1. After receing and validating the Report for Promotion submitted by the class adviser, the School Head shall compute the grade level total and school total.</p>
                <p>2. This report together with the copy of Report for Promotion submitted by the class adviser shall be forwarded to the Division Office by the end of the school year.</p>
                <p>3. The Report on Promotion per grade level is reflected in the End of School Year Report of GESP/GSSP.</p>
                <p>4. Protocols of validation & submission is under the discretion of the Schools Division Superintendent.</p>
            </div>
    </div>
    <a href="#" id="generate-sf9">Generate PDF</a>
</div>