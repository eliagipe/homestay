<?php
    $family_id = $_GET['family'];
    $student_id = $_GET['student'];
    $family_register = $_GET['family_id'];
    $student_register = $_GET['student_id'];

    if(isset($_GET['family']) && isset($_GET['student'])) {
        require_once('connectiondb.php');
        $stmt = $db->prepare(" INSERT INTO agreement (FamilyIdAgreement, StudentIdAgreement) VALUES (?,?) ");
        $stmt->bind_param("ii", $family_id, $student_id);
        $stmt->execute();
        $stmt->close();

        if(isset($_GET['family_id'])) {
            echo '<script>location.href = "agreementF.php?family=' . $family_register . '"</script>';
        } elseif(isset($_GET['student_id'])) {
            echo '<script>location.href = "agreementS.php?student=' . $student_register . '"</script>';
        }
        
    }
?>