---
statblock: true
name: 'Sea Serpent'
source: 'Level Up: Monstrous Menagerie'
size: Gargantuan
type: Monstrosity
cr: 16
ac: 17
hp: 247
hit_dice: '15d20 + 90'
speed: '10 ft., swim 50 ft.'
stats:
    - 28
    - 10
    - 22
    - 4
    - 14
    - 8
saves:
    - { constitution: 11 }
    - { dexterity: 5 }
    - { intelligence: 2 }
    - { wisdom: 7 }
    - { charisma: 4 }
senses: 'darkvision 60 ft., passive Perception 12'
traits:
    - { name: Amphibious, desc: 'The serpent can breathe air and water.' }
    - { name: Reactive, desc: "The serpent can take two reactions per round, one with its tail and one with its bite. It can't take two reactions on the same turn." }
    - { name: Sinuous, desc: 'The serpent can share the space of other creatures and objects.' }
actions:
    - { name: Coils, desc: "Melee Weapon Attack: +14 to hit, reach 5 ft., one Large or larger target in its space. Hit: 51 (4d20 + 9) bludgeoning damage. If the target is a creature, it is grappled (escape DC 22). If the target is an object, it is held. Until the grapple or hold ends, the target's speed is reduced to 0, and the sea serpent's coils attack automatically hits the target. If an attacker subjects the serpent to a critical hit, this grapple or hold ends." }
    - { name: Tail, desc: 'Melee Weapon Attack: +14 to hit, reach 15 ft., one target. Hit: 27 (4d8 + 9) bludgeoning damage. If the target is a creature, it makes a DC 22 Strength saving throw. On a failure, it is pushed up to 15 feet away from the serpent and knocked prone.' }
    - { name: Bite, desc: 'Melee Weapon Attack: +14 to hit, reach 15 ft., one target. Hit: 31 (4d10 + 9) piercing damage.' }
    - { name: 'Thrash (While Bloodied)', desc: 'The serpent moves up to its speed and then attacks with its tail and its bite.' }
    - { name: 'Recover (1/Day, While Bloodied)', desc: 'The serpent ends one condition or effect on itself.' }
reactions:
    - { name: 'Reactive Bite', desc: 'If the serpent takes 15 damage or more from a melee attack made by a creature it can see, it bites the attacker.' }
    - { name: 'Reactive Tail', desc: 'If the serpent takes 15 damage or more from an attack made by a creature or object it can see, it makes a tail attack against the attacker.' }

---
```statblock
monster: Sea Serpent
```
