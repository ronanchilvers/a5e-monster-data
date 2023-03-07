---
statblock: true
name: 'Bone Devil - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Fiend
cr: 9
ac: 19
hp: 142
hit_dice: '15d10 + 60'
speed: '50 ft., fly 40 ft.'
stats:
    - 18
    - 16
    - 18
    - 16
    - 14
    - 16
damage_resistances: 'cold; damage from nonmagical, non-silvered weapons'
saves:
    - { intelligence: 6 }
    - { wisdom: 7 }
    - { charisma: 7 }
skillsaves:
    - { athletics: 8 }
    - { deception: 7 }
    - { insight: 7 }
    - { perception: 7 }
    - { stealth: 7 }
senses: 'darkvision 120 ft., passive Perception 16'
languages: 'Infernal, telepathy 120 ft.'
traits:
    - { name: "Devil's Sight", desc: "The devil's darkvision penetrates magical darkness." }
    - { name: 'Lawful Evil', desc: 'The devil radiates a Lawful and Evil aura.' }
    - { name: 'Magic Resistance', desc: 'The devil has advantage on saving throws against spells and magical effects.' }
actions:
    - { name: 'Barbed Spear', desc: "Melee or Ranged Weapon Attack: +8 to hit, reach 10 ft. or range 20/60 ft., one target. Hit: 15 (2d10 + 4) piercing damage. If the attack is a melee attack against a creature, the target is grappled (escape DC 16). Until this grapple ends, the devil can't use its barbed spear on another target." }
    - { name: Claw, desc: 'Melee Weapon Attack: +8 to hit, reach 10 ft., one target. Hit: 17 (2d12 + 4) piercing damage.' }
    - { name: Invisibility, desc: 'The devil magically turns invisible, along with any equipment it carries. This invisibility ends if the devil makes an attack, falls unconscious, or dismisses the effect.' }
'bonus actions':
    - { name: Sting, desc: 'Melee Weapon Attack: +8 to hit, reach 10 ft., one creature. Hit: 13 (2d8 + 4) piercing damage plus 14 (4d6) poison damage, and the target makes a DC 15 Constitution saving throw, becoming poisoned for 1 minute on a failure. The target can repeat this saving throw at the end of each of its turns, ending the effect on a success.' }
combat:
    - { name: 'The bone devil prefers melee combat to ranged combat, using Invisibility to ambush when it can', desc: "It grapples enemies with its spear and then uses its claw and sting against a grappled foe. Some bone devils don't have barbed spears and simply claw and sting their foes." }

---
```statblock
monster: Bone Devil - A5E
```
