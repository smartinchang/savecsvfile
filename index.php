<1-- Lưu dữ liệu thành tập tin .CSV bằng Javascript -->
<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="UTF-8">
		<title>Lưu danh sách thành tập tin .csv</title>
	</head>
	<body>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
		<script>
			const data = [
				["Họ và tên", "Email", "Số điện thoại"],
				["Nguyễn Văn A", "nguyenvana@gmail.com", "1234567890"],
				["Trần Thị B", "tranthib@gmail.com", "0987654321"],
			];
			const csvData = "\ufeff" + data.map(row => row.join(",")).join("\n");
			const saveFile = () => {
				const blob = new Blob([csvData], { type: "text/csv;charset=utf-8" });
				saveAs(blob, "danh-sach.csv");
			};
			saveFile();
		</script>
	</body>
</html>