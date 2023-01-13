---
statblock: true
name: 'Quasit - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Tiny
type: Fiend
cr: 16
ac: 13
hp: 14
hit_dice: '4d4 + 4'
speed: '40 ft.'
stats:
    - 5
    - 16
    - 12
    - 10
    - 12
    - 12
damage_resistances: 'cold, fire, lightning; damage from nonmagical weapons'
damage_immunities: poison
condition_immunities: poisoned
skillsaves:
    stealth: 5
senses: 'darkvision 120 ft., passive Perception 11'
languages: 'Abyssal, Common'
traits:
    - { name: 'Chaotic Evil', desc: 'The quasit radiates a Chaotic and Evil aura.' }
    - { name: 'Magic Resistance', desc: 'The quasit has advantage on saving throws against spells and magical effects.' }
actions:
    - { name: 'Claws (Bite While Shapeshifted)', desc: 'Melee Weapon Attack: +5 to hit, reach 5 ft., one target. Hit: 5 (1d4 + 3) piercing damage, and the target makes a DC 11 Constitution saving throw, becoming poisoned for 1 minute on a failure. The creature can repeat the saving throw at the end of each of its turns, ending the effect on a success.' }
    - { name: 'Scare (Quasit Form Only)', desc: "A creature within 20 feet that can see the quasit makes a DC 11 Wisdom saving throw. On a failure, it is frightened for 1 minute. The creature can repeat the saving throw at the end of each of its turns, ending the effect on a success. If a creature makes its saving throw or the condition ends for it, it is immune to any quasit's Scare for the next 24 hours." }
    - { name: Shapeshift, desc: 'The quasit magically changes its form into a bat (speed 10 ft., fly 40 ft.), centipede (40 ft., climb 40 ft.), or toad (40 ft., swim 40 ft.), or back into its true form. Its statistics are the same in each form except for its movement speeds. Equipment it is carrying is not transformed. It reverts to its true form if it dies.' }
'bonus actions':
    - { name: Invisibility, desc: 'The quasit magically turns invisible, along with any equipment it carries. This invisibility ends if the quasit makes an attack, falls unconscious, or dismisses the effect.' }
combat:
    - { name: 'The quasit turns invisible and assumes a highly mobile form (usually a bat)', desc: 'It then uses Scare or attacks with its claws or bite before turning invisible again as a bonus action. It then moves as far away from its enemies as it can. It might spend some turns hiding without attacking at all. It changes targets and tactics frequently, since it can be killed easily if it becomes too predictable. If it takes damage, it hides invisibly until it recovers from its wounds.' }

---
```statblock
monster: Quasit - A5E
```
