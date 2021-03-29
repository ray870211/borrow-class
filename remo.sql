SELECT * FROM class where date='2021-1-14'

SELECT * FROM class where `date`='2021-01-11' and time=8 and class='H001';

DELETE from class where(date<NOW())