UPDATE part_info
SET part_num = '001055421'
WHERE serial_num IN
    (SELECT serial_num
     FROM carrier_site
     WHERE carrier_serial_num = ':carrier_serial_Num')