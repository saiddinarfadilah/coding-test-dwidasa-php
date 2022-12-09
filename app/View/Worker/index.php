<table class="table">
    <thead>
    <tr>
        <th scope="col">Id Worker</th>
        <th scope="col">Name</th>
        <th scope="col">Id Branch</th>
        <th scope="col">Position</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?= $model['worker']['id']; ?></td>
        <td><?= $model['worker']["name"];?></td>
        <td><?= $model["worker"]["branch"]?></td>
        <td><?= $model["worker"]["position"]?></td>
        <td>
            <a href="/worker/edit"><button type="button" class="btn btn-secondary">Edit</button></a>
            <a href="/worker/delete"><button type="button" class="btn btn-secondary">Delete</button></a>
        </td>
    </tr>
    </tbody>
</table>

<a href="/worker/add"><button type="button" class="btn btn-secondary">Add</button></a>


