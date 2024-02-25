<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <div class="container">
      <form action="{{ route('students-store')}}" method="get">
        @csrf
        <div class="row card bg-white border-top border-warning shadow-lg mt-5" style="height: 300px">
          <div class="row">
          <div class="col-md-4 form-group p-2">
            <label for="name">Nmae</label>
            <input type="text" class="form-control form-control-sm" placeholder="Name" name="name">
          </div>

           <div class="col-md-4 form-group p-2">
            <label for="name">father_ame</label>
            <input type="text" class="form-control form-control-sm" placeholder="Father name" name="father_name">
            </div>

            <div class="col-md-4 form-group p-2">
            <label for="name">Phone</label>
            <input type="tel" class="form-control form-control-sm" placeholder="phoe" name="phone">
            </div>
          </div>
             
              <div class="row">
            <div class="col-md-4 form-group p-2">
              <label for="name">Student_Class</label>
              <select name="student_class" class="form-select form-select-sm">
                <option value="html">HTML</option>
                <option value="css">CSS</option>
                <option value="bootstrap">Bootstrap</option>
                <option value="js">JS</option>
              </select>
                </div>

                <div class="col-md-4 form-group p-2">
                  <label for="name">Duration Amount</label>
                  <input type="number" class="form-control form-control-sm rounded-0" placeholder="duration amount" name="duration">
                  </div>

                  <div class="col-md-4 form-group p-2">
                    <label for="name">Duration Type</label>
                    <select name="duration_type" class="form-select form-select-sm">
                      <option value="day">Day</option>
                      <option value="months">Months</option>
                      <option value="years">Years</option>
                    </select>
                     </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-sm btn-success">Save</button>
                      </div>
                    </div>
                  </form>
    </div>
  </body>
</html>