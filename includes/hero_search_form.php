<form class="ct-search-form">
    <select id="ct-select">
        <option value="" disabled selected hidden
        >Specializations</option
        >
        <?php foreach($consultations as $consultation ): ?>
        <option value='<?php echo $consultation['id']; ?>'><?php echo $consultation['title'] ?></option>
        <?php endforeach;?>
    </select>
    <button type="submit" class="outline-btn primary with-icon">
        <span>Go</span>
        <svg
        xmlns="http://www.w3.org/2000/svg"
        width="31.078"
        height="19.547"
        viewBox="0 0 31.078 19.547"
        >
        <g
            id="Group_102"
            data-name="Group 102"
            transform="translate(19967.715 6634.534)"
        >
            <path
            id="Path_23"
            data-name="Path 23"
            d="M-19994.812-6625.45h29.215"
            transform="translate(27.098)"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            />
            <path
            id="Path_24"
            data-name="Path 24"
            d="M-19949.131-6639.5l10,8.621-10,9.442"
            transform="translate(1 5.723)"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            />
        </g>
        </svg>
    </button>
</form>