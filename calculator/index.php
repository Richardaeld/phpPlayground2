
    <?php
        include_once 'components/header.php'
    ?>
    <!-- calculator form -->
    <form action='components/functions.php' method='get'>
        <input type='text' name='num01' id="num01" placeholder="Number 1"/>
        <select name="operation" id="operation">
            <!-- <label>Choose Operation!</label> -->
            <option value="add">add</option>
            <option value="sub">subtract</option>
        </select>
        <input type="text" name="num02" id="num02" placeholder="Number 2">
        <button>Calculate</button>
    </form>

    <?php
        include_once 'components/footer.php'
    ?>

