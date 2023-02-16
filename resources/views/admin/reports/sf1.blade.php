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
                <th rowspan="2">LRN</th>
                <th rowspan="2">Name</th>
                <th rowspan="2">Sex (M/F)</th>
                <th rowspan="2">Birtdate (mm/dd/yyyy)</th>
                <th rowspan="2">AGE as of 1st Friday "June"</th>
                <th rowspan="2">Mother Tongue</th>
                <th rowspan="2">IP Ethnic Group)</th>
                <th rowspan="2">Religion</th>
                <th colspan="4">Address</th>
                <th colspan="2">Parents</th>
                <th colspan="2">Guardian(If not Parent</th>
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
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
    <a href="#" id="generate-sf1">Generate PDF</a>
</div>