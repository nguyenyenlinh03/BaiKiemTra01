<!-- I. Trắc nghiệm -->
<!-- Câu 1:
Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 9 )

Câu 2:
a) True

Câu 3:
a) array()

Câu 4:
a) readfile()

Câu 5:
b) Chuyển đổi một đối tượng thành một chuỗi -->

<!-- II. Tự luận -->
<!-- Bài 1: -->
<?php
    function generateFibonacci($n) {
        $fibon = array();

        if ($n > 0) {
            $fibonacci[] = 0; 

            if ($n > 1) {
                $fibonacci[] = 1; 

                for ($i = 2; $i < $n; $i++) {
                    $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
                }
            }
        }

        return $fibonacci;
    }

    $n = 10;
    $fibonacciChanin = generateFibonacci($n);

    echo "Bài 1: ";
    echo "Dãy số Fibonacci đầu tiên có $n phần tử là: " . implode(', ', $fibonacciChanin);
?>
<br>

<!-- Bài 2: -->
<?php
    // Tạo mảng kết hợp chứa thông tin về học sinh
    $students = array(
        array('id' => 1, 'name' => 'Yen Linh', 'age' => 20, 'grade' => 9.2),
        array('id' => 2, 'name' => 'Hong Cuc', 'age' => 20, 'grade' => 8.8),
        array('id' => 3, 'name' => 'Huong Quynh', 'age' => 21, 'grade' => 7.6),
        array('id' => 4, 'name' => 'To Uyen', 'age' => 20, 'grade' => 8.1)
    );

    echo "Bài 2: "."<br>";
    // Hiển thị thông tin của tất cả học sinh
    echo "Thông tin của tất cả học sinh trong lớp là: <br>";
    foreach ($students as $number => $student) {
        $studentNumber = $number + 1;
        echo " Học sinh thứ $studentNumber:
            ID: {$student['id']},
            Name: {$student['name']},
            Age: {$student['age']},
            Grade: {$student['grade']} <br>";
    }

    // tìm học sinh có điểm cao nhất 
    function studentWithHighestGrade($students) {
        $highestGrade = 0;
        $highestGradeStudent = null;

        foreach ($students as $student) {
            if ($student['grade'] > $highestGrade) {
                $highestGrade = $student['grade'];
                $highestGradeStudent = $student;
            }
        }

        return $highestGradeStudent;
    }

    $highestGradeStudent = studentWithHighestGrade($students);

    // Hiển thị 
    echo "Học sinh có điểm cao nhất trong lớp là: <br>";
    if ($highestGradeStudent !== null) {
        echo "ID: {$highestGradeStudent['id']}, Name: {$highestGradeStudent['name']}, Age: {$highestGradeStudent['age']}, Grade: {$highestGradeStudent['grade']}\n";
    } else {
        echo "Không có học sinh nào đạt điểm cao nhất. <br>";
    }
?>




