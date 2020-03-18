var currentRow = 1;

function addRow() {
	let container = document.createElement('div');

	var temp = `
			<div class="row">
				<div class="col-6">
				    <label for="">Country name</label>
					<input type="text" name="row[${currentRow}][country]" class="form-control">
				</div>
				<div class="col-6">
					<label for="">City name</label>
					<input type="text" name="row[${currentRow}][city]" class="form-control">
				</div>
			</div>
	`;
	container.innerHTML = temp;
	document.getElementById('content').appendChild(container);

	currentRow++;
}