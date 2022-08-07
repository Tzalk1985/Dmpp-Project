var dmppIndex,
    table = document.getElementById("table");

//select row to display in inputs
function selectedRowToInput() {

    for (var i = 1; i < table.rows.length; i++) {
        table.rows[i].onclick = function () {
            dmppIndex = this.rowIndex;
            document.getElementById("DMPP").value = this.cells[0].innerHTML;
            document.getElementById("H3PO4").value = this.cells[1].innerHTML;
            document.getElementById("DMP").value = this.cells[2].innerHTML;
            document.getElementById("COLOR").value = this.cells[3].innerHTML;
            document.getElementById("YELLOW").value = this.cells[4].innerHTML;
            document.getElementById("BLUE").value = this.cells[5].innerHTML;
            document.getElementById("Kilos").value = this.cells[6].innerHTML;
            document.getElementById("Litre").value = this.cells[7].innerHTML;

        };
    }
}
selectedRowToInput();

