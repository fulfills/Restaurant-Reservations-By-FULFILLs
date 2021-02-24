@charset "utf-8";

#rerebf-status *
{
    box-sizing: border-box;
}

#rerebf-status > div.calendar > div.table {
    display: flex;
    flex-wrap: wrap;
}

#rerebf-status > div.calendar > div.table > div {
    width: 13.88%;
    margin: 0.2%;
    padding: 10px;
    background-color: #FFFFFF;
    min-height: 100px;
}

#rerebf-status > div.calendar > div.table > div.label
{
    min-height: unset;
    padding: 15px;
    background-color: #66cc99;
    color: #FFFFFF;
    text-align: center;
}

#rerebf-status > div.calendar > div.table > div.blank
{
    background-color: #DDDDDD;
}

#rerebf-status > div.calendar > div.table > div.today {
    background-color: #c8fa80;
}

#rerebf-status > div.calendar > div.table > div > label.is_open {
    display: block;
    height: 25px;
    text-align: center;
}

#rerebf-status > div.calendar > div.table > div > label.is_open > input {
    display: none;
}

#rerebf-status > div.calendar > div.table > div > label.is_open > span.open {
    display: block;
    background-color: #ffff00;
    color: #000000;
    line-height: 25px;
}

#rerebf-status > div.calendar > div.table > div > label.is_open > span.close {
    display: none;
    background-color: #BBBBBB;
    color: #000000;
    line-height: 25px;
}

#rerebf-status > div.calendar > div.table > div > label.is_open > input[type="checkbox"] ~ span.open {
    display: none;
}

#rerebf-status > div.calendar > div.table > div > label.is_open > input[type="checkbox"] ~ span.close {
    display: block;
}

#rerebf-status > div.calendar > div.table > div > label.is_open > input[type="checkbox"]:checked ~ span.open {
    display: block;
}

#rerebf-status > div.calendar > div.table > div > label.is_open > input[type="checkbox"]:checked ~ span.close {
    display: none;
}