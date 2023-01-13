---
statblock: true
name: 'Gibbering Mouther - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Aberration
cr: 2
ac: 9
hp: 67
hit_dice: '9d8 + 27'
speed: '20 ft., swim 20 ft.'
stats:
    - 10
    - 8
    - 16
    - 2
    - 10
    - 6
damage_resistances: psychic
condition_immunities: prone
senses: 'darkvision 60 ft., passive Perception 10'
traits:
    - { name: Amphibious, desc: 'The mouther can breathe air and water.' }
    - { name: 'Gibbering Mouths', desc: 'The mouther babbles constantly. A living non-aberration creature that starts its turn within 30 feet and can hear its gibbering makes a DC 10 Intelligence saving throw. On a failure, the creature is confused until the start of its next turn.' }
    - { name: 'Reality Eater', desc: 'The ground within 15 feet of the mouther is the consistency of sucking mud and is difficult terrain to all creatures except the mouther. Each non-aberrant creature that starts its turn in the area or enters it for the first time on its turn makes a DC 10 Strength saving throw. On a failure, its Speed is reduced to 0 until the start of its next turn.' }
actions:
    - { name: Multiattack, desc: 'The mouther makes two bite attacks.' }
    - { name: Bite, desc: 'Melee Weapon Attack: +2 to hit, reach 5 ft., one creature. Hit: 7 (2d6) piercing damage, and the target makes a DC 10 Strength saving throw, falling prone on a failure. If the target is killed by this attack, it is absorbed into the mouther.' }
'bonus actions':
    - { name: 'Blinding Bile (Recharge 56)', desc: "Ranged Weapon Attack: +2 to hit, range 20/60 ft., one creature. Hit: 3 (1d6) acid damage, and the target is blinded until the end of the mouther's next turn." }
combat:
    - { name: 'The gibbering mouther moves towards the closest creature and bites it', desc: 'If possible, it spits bile at a creature right before it bites. If its blinding bile attack is charged and no creatures are near enough to bite, it uses it on whichever creature attacked it most recently. The mouther is not above biting unconscious opponents, and it does not retreat.' }

---
```statblock
monster: Gibbering Mouther - A5E
```
