# SOLID principles examples

- [x] Single Responsibility
- [x] Open-Closed
- [x] Liskov Substitution
- [x] Interface Segregation
- [x] Depandency Inversion

## Single responsibility
A class should have one, and only one reason to change

## Open-Closed
Entities should be open for extension, but closed for modification
* Separate extensible behaviour behind an interface, and flip the dependencies

## Liskov Substitution
Let Φ(x) be a property provable about objects x of type T. Then Φ(y) should be true for objects y of type S where S is a subtype of T
* Derived classes must be substitutable for their base calsses

Quick list of ways to adhere to LSP:
1. Signature must mach
1. Preconditions can't be greater
1. Post conditions at least equal to
1. Exception types must mach

## Interface Segregation
A client should not be forced to implement an interface that it doesn't use

## Dependency Inversion
Depend on abstractions, not on concretions
* Dependency Inversion does not equal to Dependency Injection
* High level modules should not depend upon low level module, they shoud depends upon abstractions, low level module too should depend upon abstraction
    * High level code isn't as concerned with details
    * Low level code is more concerned with details and specific
* All of this is about decoupling code
