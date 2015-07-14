<div class="transcript_system_container">
    <?php if (count($ratingsAll) > 0) : ?>
        <div class="transcript_system_content">

            <label for="userId">Select student:</label>
            <select name="userId" id="userId">
                <?php foreach ($ratingsAll as $userID => $rating) : ?>
                    <option value="<?php echo $userID?>"><?php echo $rating[0]['user_name'] . ' ' . $rating[0]['user_last_name']; ?></option>
                <?php endforeach; ?>
            </select>

            <?php if ($studentInfo) : ?>
                <div class="student_info_container">

                    <div class="student_name">
                       Name: <?php echo $studentInfo[0]['user_name'] . ' ' . $studentInfo[0]['user_last_name']; ?>
                    </div>

                    <div class="student_id">
                        Id: <?php echo $studentInfo[0]['user_id']; ?>
                    </div>

                    <div class="student_gpa">
                        GPA:
                    </div>

                    <div class="student_major">
                        Major:
                    </div>

                    <div class="student_ratings_container">

                    </div>
                </div>
            <?php endif; ?>

        </div>
    <?php else : ?>
        <div class="tip">
            <span>You don't have any records.</span>
        </div>
    <?php endif; ?>
</div>