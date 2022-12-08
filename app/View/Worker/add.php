<div class="container">
    <form method="post" action="/worker/add">
        <div class="row mb-3 mt-5">
            <label for="inputId" class="col-md-2 col-form-label">Id Worker</label>
            <div class="col-md-4">
                <input type="text" class="form-control" id="inputId" name="id">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputName" class="col-md-2 col-form-label">Name</label>
            <div class="col-md-4">
                <input type="text" class="form-control" id="inputName" name="name">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputIdBranch" class="col-md-2 col-form-label">Id Branch</label>
            <div class="col-md-4">
                <input type="text" class="form-control" id="inputIdBranch" name="branchidbranch">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPosition" class="col-md-2 col-form-label">Position</label>
            <div class="col-md-4">
                <input type="text" class="form-control" id="inputPosition" name="position">
            </div>
        </div>
        <button type="submit" class="btn btn-secondary">Add</button>
    </form>
</div>