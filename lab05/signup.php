<?php include("top.html");?>  

<form action="signup-submit.php" method="POST" accept-charset="UTF-8">
        <fieldset>
            <legend>Signup for new user</legend>
            <br>
        
            <p><label><strong> Full Name :</strong></label>
            <label>
                <input type='text' name='name' id='name' maxlength="16" required/>
            </label></p>
            
            
            <p><label><strong>Age :</strong> </label>
            <label>
                <input type='text' name='age' id='age' size="6" maxlength="2" required/>
            </label></p>
            
           <p> <label><strong>Gender : </strong></label>
            <label>
                <input type="radio" name="gender" id="male" value="M" /> Male
                <input type="radio" name="gender" id="female" value="F" checked/> Female </label></p>
            
        
            <p><label><strong>Personality Type :</strong> </label>
            <label>
                <input type='text' name='ptype' id='ptype' maxlength="4" size="6" required/>
                <a href="http://www.humanmetrics.om/cgi-win/JTypes2.asp">(Don't you know your type?)</a>
            </label></p>
            
            <p><abel><strong>Favorite OS : </strong></label>
            <label>
                <select name="os">
                    <option name="os">Windows</option>
                    <option name="os">Linux</option>
                    <option name="os">Unix</option>
                    <option name="os">Mac OS</option>
                    <option name="os">XP</option>

                </select>
            </label></p>
           <p><label><strong>Seeking Age : </strong></label>
           <label><input type="text" name="min" id="min" maxlength="2" size="6" placeholder="min"/ required>
                to 
              <input type="text" name="max" id="max" maxlength="2" size="6" placeholder="max" required />
            </label></p>
              <p><label><strong><input type='submit' value="Submit" /></strong></label></p>
        </fieldset>
    </from>
        <?php include("bottom.html"); ?>