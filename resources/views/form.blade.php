<form action="{{ 'upload' }}" method="POST" enctype="multipart/form-data">
    @csrf
    <h1>Form Upload file PHP</h1>
    <label for="image">Tên File: </label>
    <input type="file" name="image">
    <input type="submit" value="Upload File">
    <p><b>Ghi Chú: </b>Chỉ cho phép định dạng .jpg, jpeg, .gif và kích thước tệp tin là 5MB.</p> 
</form>