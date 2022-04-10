Concepts in Abstraction and Encapsulation
oop concepts




- Abstraction is the concept of hiding the implementation and un-necessary
details or data from the user. It's the process of hiding complexity and
focusing on on what functionalities are available to use.


- Encapsulation is the concept of wrapping data and code together as a
single unit.


- Inheritance is the concept in which one object acquires/inherits all the
properties and behaviors of a parent object.


- Polymorphism is the concept by which we can perform a single action in
different ways. Polymorphism is derived from 2 Greek words: poly and
morphs. The word "poly" means many and "morphs" means forms. So
polymorphism means many forms.


----------------------------------------------------------------

Abstraction
Abstraction solves the issues at the
design level.

Abstraction is about hiding unwanted
details while showing most essential
information.

Abstraction allows focussing on what
the information object must contain

Encapsulation
Encabsulation solves it implementation
level.

Encapsulation means binding the code
and data into a single unit.

Encapsulation means hiding the internal
details or mechanics of how an object
does something for security reasons.


--------------
Client [
    - Connect 
    - Call
    - exec
    - terminate
]

----------
polymorphism


-----------

OOP relationships

1 - Association defines a relationship between classes of objects that allows
one object instance to cause another to perform an action on its behalf.


2 - Aggregation is a weak type of association that represents the relationship
between an owner (whole) object and its aggregated (parts) collection of
objects in a way that does not affect the life cycle of the parts objects if
the owner is destroyed.

3 - Composition is a strong type of association and its also called death
relationship. It represent an owner object that own another object as part
of it. This type of relationship controls the life cycle of the owned object in a
way that if the owner is destroyed then the owned object is destroyed too.