<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">DepEd School Form 8</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form method="POST" action="{{ route('deped-form-8.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="age">Age:</label>
                                <input type="number" name="age" id="age" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="height">Height:</label>
                                <input type="number" name="height" id="height" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="weight">Weight:</label>
                                <input type="number" name="weight" id="weight" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="height_squared">Height^2:</label>
                                <input type="number" name="height_squared" id="height_squared" class="form-control" readonly>
                            </div>

                            <div class="form-group">
                                <label for="bmi">BMI:</label>
                                <input type="number" name="bmi" id="bmi" class="form-control" readonly>
                            </div>

                            <div class="form-group">
                                <label for="bmi_category">BMI Category:</label>
                                <input type="text" name="bmi_category" id="bmi_category" class="form-control" readonly>
                            </div>

                            <div class="form-group">
                                <label for="height_for_age">Height-for-Age:</label>
                                <input type="text" name="height_for_age" class="form-control" readonly>
                            </div>
                                                    <div class="form-group">
                            <label for="remarks">Remarks:</label>
                            <input type="text" name="remarks" id="remarks" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


public function create()
{
    return view('student.create');
}

public function store(Request $request)
{
    $validatedData = $request->validate([
        'age' => 'required|integer|min:1|max:150',
        'height' => 'required|numeric|min:1|max:300',
        'weight' => 'required|numeric|min:1|max:500',
    ]);

    $height_squared = pow($validatedData['height'], 2);
    $bmi = $validatedData['weight'] / $height_squared;
    $bmi_category = '';
    $height_for_age = '';
    $remarks = '';

    // Calculate BMI category, height for age, and remarks based on the input data

    $student = new Student();
    $student->lrn = $validatedData['lrn'];
    $student->name = $validatedData['name'];
    $student->birthdate = $validatedData['birthdate'];
    $student->age = $validatedData['age'];
    $student->height = $validatedData['height'];
    $student->weight = $validatedData['weight'];
    $student->height_squared = $height_squared;
    $student->bmi = $bmi;
    $student->bmi_category = $bmi_category;
    $student->height_for_age = $height_for_age;
    $student->remarks = $remarks;
    $student->save();

    return redirect()->route('student.index')->with('success', 'Student data saved successfully.');
}
var age = parseInt(document.getElementById("age").value);
var height_for_age = "";
        
// Data source: https://www.who.int/growthref/en/
if (age >= 5 && age <= 19) {
    if (height < 100) {
        height_for_age = "Severely Stunted";
    } else if (height >= 100 && height <= 115) {
        height_for_age = "Stunted";
    } else if (height > 115 && height <= 130) {
        height_for_age = "Mildly Stunted";
    } else if (height > 130 && height <= 145) {
        height_for_age = "Normal";
    } else if (height > 145 && height <= 160) {
        height_for_age = "Mildly Tall";
    } else if (height > 160 && height <= 175) {
        height_for_age = "Tall";
    } else if (height > 175) {
        height_for_age = "Very Tall";
    }
}
document.getElementById("height_for_age").value = height_for_age;