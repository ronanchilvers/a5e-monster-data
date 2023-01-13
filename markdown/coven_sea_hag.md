---
statblock: true
name: 'Coven Sea Hag - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Fey
cr: 4
ac: 14
hp: 75
hit_dice: '10d8 + 30'
speed: '30 ft., swim 40 ft.'
stats:
    - 16
    - 12
    - 16
    - 12
    - 12
    - 16
saves:
    - { constitution: 5 }
    - { wisdom: 3 }
skillsaves:
    - { arcana: 3 }
    - { deception: 5 }
    - { insight: 3 }
senses: 'darkvision 60 ft., passive Perception 11'
languages: 'Aquan, Common, Giant'
traits:
    0: { name: Amphibious, desc: 'The hag can breathe air and water.' }
    1: { name: Curse, desc: "A creature that makes a bargain with the hag is magically cursed for 30 days. While it is cursed, the target automatically fails saving throws against the hag's scrying and geas spells, and the hag can cast control weather centered on the creature." }
    2: { name: 'Innate Spellcasting', desc: "The hag's innate spellcasting ability is Charisma (spell save DC 13). It can innately cast the following spells, requiring no material components:" }
    traits: ['At will: dancing lights, disguise self', '1/day: control weather, geas, scrying']
actions:
    - { name: Claws, desc: 'Melee Weapon Attack: +5 to hit, reach 5 ft., one creature. Hit: 10 (2d6 + 3) slashing damage.' }
    - { name: 'Death Glare (Gaze)', desc: 'One frightened creature within 30 feet makes a DC 11 Wisdom saving throw. On a failed saving throw, the creature drops to 0 hit points. On a success, the creature takes 7 (2d6) psychic damage.' }
    - { name: Multiattack, desc: 'The hag attacks twice with its claws.' }
    - { name: 'Lightning Blast (Recharge 5-6)', desc: "An 80-foot-long, 5-foot-wide lightning bolt springs from the hag's extended claw. Each creature in the area makes a DC 13 Dexterity saving throw, taking 21 (6d6) lightning damage on a failed save or half damage on a success." }
'bonus actions':
    - { name: 'Horrific Transformation', desc: "The hag briefly takes on a terrifying form or reveals its true form. Each creature within 30 feet that can see the hag makes a DC 11 Wisdom saving throw. A creature under the hag's curse automatically fails this saving throw. On a failure, the creature is frightened until the end of its next turn. If a creature's saving throw is successful, it is immune to the hag's Horrific Transformation for 24 hours." }
combat:
    - { name: 'The hag uses Horrific Transformation to frighten as many creatures as possible and then uses Death Glare on one of them', desc: 'If no creatures are frightened or if it is bloodied, the hag flees, using its swim speed if possible. It attacks with its claws only if cornered.' }

---
```statblock
monster: Coven Sea Hag - A5E
```
