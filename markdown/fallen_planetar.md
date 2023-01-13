---
statblock: true
name: 'Fallen Planetar - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Celestial
cr: 16
ac: 19
hp: 250
hit_dice: '20d10 + 140'
speed: '40 ft., fly 120 ft.'
stats:
    - 22
    - 22
    - 24
    - 22
    - 24
    - 24
damage_resistances: 'radiant; damage from nonmagical weapons'
damage_immunities: 'necrotic, poison'
condition_immunities: 'charmed, exhaustion, frightened, poisoned'
'damage vulenrabilities': radiant
saves:
    wisdom: 12
    charisma: 12
skillsaves:
    athletics: 11
    insight: 12
    perception: 12
    religion: 12
senses: 'truesight 60 ft., passive Perception 22'
languages: 'all, telepathy 120 ft.'
traits:
    0: { name: 'Champion of Truth', desc: 'The planetar automatically detects lies. Additionally, it cannot lie.' }
    1: { name: 'Innate Spellcasting', desc: "The planetar's spellcasting ability is Charisma (spell save DC 20). The planetar can innately cast the following spells, requiring no material components:" }
    traits: ['1/day each: commune, control weather, raise dead']
    2: { name: 'Magic Resistance', desc: 'The planetar has advantage on saving throws against spells and magical effects.' }
    3: { name: Aligned, desc: 'An angel radiates a Lawful aura. Most angels also radiate a Good aura, and a few radiate Evil.' }
    4: { name: 'Celestial Dissolution', desc: 'When an angel dies, its body and equipment dissolve into motes of light.' }
    5: { name: 'Detect Alignment', desc: 'An angel knows the alignment, if any, of each creature within 30 feet that it can see.' }
    6: { name: 'Immortal Nature', desc: "An angel doesn't require air, sustenance, or sleep." }
actions:
    - { name: Multiattack, desc: 'The planetar attacks twice with its flaming sword.' }
    - { name: 'Flaming Sword', desc: "Melee Weapon Attack: +11 to hit, reach 10 ft., one target. Hit: 20 (4d6 + 6) slashing damage plus 21 (6d6) ongoing fire or radiant damage (the planetar's choice). A creature can use an action to extinguish this holy flame on itself or a creature within 5 feet." }
    - { name: 'Heavenly Bolt', desc: 'The planetar fires a lightning bolt in a line 100 feet long and 5 feet wide. Each creature in the line makes a Dexterity saving throw, taking 56 (16d6) lightning damage on a failed save, or half damage on a success.' }
    - { name: 'Heal (2/Day)', desc: 'The planetar touches a creature other than itself, magically healing 60 hit points of damage and ending any blindness, curse, deafness, disease, or poison on the target.' }
    - { name: 'Consume Life Energy (1/Day)', desc: "The angel feasts on the departing life energy of a humanoid within 5 feet. The target must have been slain within the last hour. The angel magically gains temporary hit points equal to half the dead creature's maximum hit points. These hit points last until depleted. Only a spell cast with a 9th-level slot can raise the corpse from the dead." }
reactions:
    - { name: 'Protective Parry', desc: 'When a creature within 5 feet would be hit with a melee attack, the planetar applies disadvantage to the attack roll.' }
'bonus actions':
    - { name: 'Awe-Inspiring Gaze (Gaze)', desc: "The planetar targets a creature within 90 feet. The target makes a DC 20 Wisdom saving throw. On a failure, it is frightened until the end of its next turn. If the target makes its saving throw, it is immune to any angel's Awe-Inspiring Gaze for the next 24 hours." }
combat:
    - { name: "The planetar prefers to attack its strongest opponent with its flaming sword, using Heavenly Bolt against creatures it can't reach and against groups", desc: 'The planetar stays near allies to protect them with its parry. Angels have no fear and rarely retreat.' }

---
```statblock
monster: Fallen Planetar - A5E
```
