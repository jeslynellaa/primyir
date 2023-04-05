<style>

table {
  border-collapse: collapse;
  text-align: center;
  margin: 2rem;
  font-size: 11px;
}

table, tr, td, th {
  border: 1px solid black;
}

th {
  vertical-align: top;
}

.flex {
    display: flex;
}

.space {
    justify-content: space-around;
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

.bold{
    font-weight: 700;
}

.bold th, td {
    padding: .2rem;
}

.flex table {
    margin: 0;
}

.register th, td {
    padding: .2rem;
}

.indicator {
    margin-left: 2rem;
}

.register {
    margin-left: .3rem;
}

.register table {
    height: 5.84rem;
}

.footer {
    margin-left: 2rem;
}

hr {
    margin-top: 2rem;
}

.size-10 {
    font-size: 10px;
}

.w10 {
    width: 100%;
}

</style>

<script src="http://code.jquery.com/jquery-3.4.1.js"></script>
<script src="../../../../../../plugins/jquery/printThis.js"></script>

<script>
$(document).ready(function(){
  $('#generate-sf1').click(function(){
    $('#sf1').printThis({
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
    <div id="sf1">
        <div class="pdf-header">
            <img src="/png/deped_logo.png" alt="deped logo">
            <div class="sub-header">
                <div class="title">
                    <h4>School Form 1 (SF 1) School Register</h4>
                    <p>(This replaces Form 1, Master List & STS Form 2-Family Background and Profile)</p>
                </div>
                <div class="info">
                    <div class="sub-info">
                        <div class="school-id">
                            <span class="bold">School ID:</span>
                            <span>00111</span>
                            <span>Region V (BICOL REGION)</span>
                        </div>
                        <div class="school-name">
                            <span class="bold">School Name:</span>
                            <span>Sorsogon National High School</span>
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
                            <span>{{$schoolyear->year_start}}-{{$schoolyear->year_end}}</span>
                        </div>
                        <div class="Grade Level">
                            <span class="bold">Grade Level:</span>
                            <span>{{$section->grade_level}}</span>
                        </div>
                        <div class="Section">
                            <span class="bold">Section:</span>
                            <span>{{$section->name}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <table>
            <tr>
                <th rowspan="2" style="width: 3rem">LRN</th>
                <th rowspan="2" style="width: 10rem">Name</th>
                <th rowspan="2">Sex (M/F)</th>
                <th rowspan="2">Birtdate (mm/dd/yyyy)</th>
                <th rowspan="2">AGE as of 1st Friday "June"</th>
                <th rowspan="2">Mother Tongue</th>
                <th rowspan="2">IP (Ethnic Group)</th>
                <th rowspan="2">Religion</th>
                <th colspan="4">Address</th>
                <th colspan="2">Parents</th>
                <th colspan="2">Guardian(If not Parent)</th>
                <th rowspan="2">Contact Number of Parent or Guardian</th>
                <th colspan="1">Remarks</th>
            </tr>
            <tr>
                <th>House #/ Street/Sitio/Purok</th>
                <th>Barangay</th>
                <th>Municipality/City</th>
                <th>Province</th>
                <th>Father's Name (Last Name, First Name, Middle Name)</th>
                <th>Mother's Maiden Name (Last Name, First Name, Middle Name)</th>
                <th>Name</th>
                <th>Relationship</th>
            </tr>
            @foreach($records as $record)
                <tr>
                    <th>{{$record->Student->LRN_no}}</th>
                    <th>{{$record->Student->user->lastName}}, {{$record->Student->user->givenName}} {{$record->Student->user->middleName}}</th>
                    <th>{{$record->Student->user->sex}}</th>
                    <th>
                        <?php
                            $date=date_create($record->Student->user->birthdate);
                            echo date_format($date,"m/d/Y");
                        ?>
                    </th>
                    <th>{{$record->age}}</th>
                    <th>{{$record->mother_tongue}}</th>
                    <th>{{$record->IP_ethnicGroup}}</th>
                    <th>{{$record->Student->religion}}</th>
                    <th>{{$record->Student->user->address->street}}</th>
                    <th>{{$record->Student->user->address->barangay}}</th>
                    <th>{{$record->Student->user->address->city}}</th>
                    <th>{{$record->Student->user->address->province}}</th>
                    <th>{{$record->father_lastName}}, {{$record->father_givenName}} {{$record->father_middleName}}</th>
                    <th>{{$record->mother_lastName}}, {{$record->mother_givenName}} {{$record->mother_middleName}}</th>
                    <th>{{$record->guardian_lastName}}</th>
                    <th>{{$record->guardian_relationship}}</th>
                    <th>{{$record->parent_guardian_contactNo}}</th>
                    <th>{{$record->remarks}}</th>
                </tr>
            @endforeach
            <script>
                for (rows = 0; rows <= 49; rows++) {
                    document.write(" <tr> ")
                    for (col = 0; col <= 17; col++) {
                        document.write(" <td style= padding:9px ></td> ")
                    }
                    document.write(" </tr> ")
                }
            </script>
        </table>
        <div class="flex">
            <div class="indicator">
                <table class="bold" style="font-size: 10px;">
                    <thead>
                        <th>Indicator</th>
                        <th>Code</th>
                        <th>Required Information</th>
                        <th></th>
                        <th>Code</th>
                        <th>Required Information</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Transferred Out</td>
                            <td>T/O</td>
                            <td>Name of Public (P) Private (PR) School & Effectivity Date</td>
                            <td></td>
                            <td>CCT</td>
                            <td>CCT Control/reference number & Effectivity Date</td>
                        </tr>
                        <tr>
                            <td>Transferred In</td>
                            <td>T/I</td>
                            <td>Name of Public (P) Private (PR) School & Effectivity Date</td>
                            <td></td>
                            <td>B/A</td>
                            <td>Name of school last attended & Year</td>
                        </tr>
                        <tr>
                            <td>Dropped</td>
                            <td>DRP</td>
                            <td>Reasonand Effectivity Date</td>
                            <td>LWD</td>
                            <td>Specify</td>
                        </tr>
                        <tr>
                            <td>Late Enrollment</td>
                            <td>LE</td>
                            <td>Reason (Enrollment beyond 1st Friday of June)</td>
                            <td></td>
                            <td>ACL</td>
                            <td>Specify Level & Effectivity Data</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="register">
                <table>
                    <tr>
                        <th style="font-size: 8px">REGISTERED</th>
                        <th>BoSY</th>
                        <th>EoSY</th>
                    </tr>
                    <tr>
                        <th>MALE</th>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>FEMALE</th>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>TOTAL</th>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
            <div class="size-10 footer">
                <span>Prepared By:</span>
                <hr>
                <div style="text-align: center">
                    <p style="margin:0; font-size: 8px">(Signature of Adviser over Printed Name)</p>
                    <div class="flex">
                        <p style="margin-right: 1.3rem; font-size: 9.5px"><u>BoSY Date:  </u></p>
                        <p style="font-size: 9.5px"><u>EoSY Date:  </u></p>
                    </div>
                </div>
            </div>

            <div class="size-10 footer">
                <span>Certified Correct:</span>
                <hr>
                <div style="text-align: center">
                    <p style="margin:0; font-size: 8px">(Signature of Adviser over Printed Name)</p>
                    <div class="flex">
                        <p style="margin-right: 1.3rem; font-size: 9.5px"><u>BoSY Date:  </u></p>
                        <p style="font-size: 9.5px"><u>EoSY Date:  </u></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#" id="generate-sf1">Generate PDF</a>
</div>