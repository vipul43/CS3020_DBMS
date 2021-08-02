-- PART-I
-- Q-1
-- SELECT dept_name
-- FROM (SELECT dept_name, count(*) AS instructors FROM instructor GROUP BY dept_name) AS T NATURAL JOIN
--      (SELECT dept_name, count(*) AS students FROM student GROUP BY dept_name) AS S
-- WHERE T.instructors > S.students;

-- Q-2
-- SELECT DISTINCT(student.name)
-- from student NATURAL JOIN takes
-- WHERE takes.course_id IN (SELECT course_id FROM course WHERE dept_name = 'Comp. Sci.');

-- Q-3
-- SELECT instructor.name, teaches.course_id
-- FROM instructor NATURAL JOIN teaches
-- WHERE teaches.ID IN (SELECT ID FROM teaches GROUP BY ID HAVING COUNT(ID)>1);

-- Q-4
-- SELECT *
-- FROM (student INNER JOIN takes ON student.id);

-- Q-5
-- CREATE TABLE oddeven (
--     num INT,
--     str VARCHAR(5)
-- )
-- DELIMITER #
CREATE PROCEDURE poe(in a INT, b INT)
BEGIN
FOR i in a..b
DO
    INSERT INTO oddeven(num, str) VALUES
END


-- DELIMITER ;

-- Q-6
-- DELIMITER #
-- CREATE FUNCTION get_user()
-- RETURNS VARCHAR(50) DETERMINISTIC
-- BEGIN
-- DECLARE user VARCHAR(50);
-- SELECT CURRENT_USER INTO user;
-- RETURN user;
-- END;#
-- DELIMITER ;

-- PART-II
-- Q-1
-- create table menu (
--     id int not null,
--     name varchar(50) not null,
--     type boolean);

-- create table customerorder(
--     id int not null,
--     count int not null);

-- CREATE TABLE price(
--     id int not null,
--     amount float);
-- Q-2


-- PART-III
-- Q-1
