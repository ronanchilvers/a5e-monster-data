---
statblock: true
name: 'Priest - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Humanoid
cr: 2
ac: 14
hp: 32
hit_dice: '5d8 + 10'
speed: '30 ft.'
stats:
    - 12
    - 10
    - 14
    - 12
    - 16
    - 12
saves:
    - { wisdom: 5 }
    - { charisma: 3 }
skillsaves:
    - { medicine: 5 }
    - { insight: 5 }
    - { persuasion: 3 }
    - { religion: 3 }
senses: 'passive Perception 13'
languages: 'any two'
traits: {  }
spells:
    spells: ['The priest is a 5th level spellcaster. Their spellcasting ability is Wisdom (spell save DC 13, +5 to hit with spell attacks). They have the following cleric spells prepared:', 'Cantrips (at will): light, sacred flame, thaumaturgy', '1st-level (4 slots): ceremony, detect evil and good, guiding bolt, healing word', '2nd-level (3 slots): lesser restoration, zone of truth', '3rd-level (2 slots): dispel magic, spirit guardians']
actions:
    - { name: Mace, desc: 'Melee Weapon Attack: +3 to hit, reach 5 ft., one target. Hit: 4 (1d6 + 1) bludgeoning damage. On a hit, the priest can expend a spell slot to deal 7 (2d6) radiant damage, plus an extra 3 (1d6) radiant damage for each level of the spell slot expended above 1st.' }
    - { name: 'Sacred Flame (Cantrip; V, S)', desc: 'One creature the priest can see within 60 feet makes a DC 13 Dexterity saving throw, taking 9 (2d8) radiant damage on a failure. This spell ignores cover.' }
    - { name: 'Guiding Bolt (1st-Level; V, S)', desc: "Ranged Spell Attack: +5 to hit, range 120 ft., one target. Hit: 14 (4d6) radiant damage, and the next attack roll made against the target before the end of the priest's next turn has advantage." }
    - { name: 'Dispel Magic (3rd-Level; V, S)', desc: "The priest scours the magic from one creature, object, or magical effect within 120 feet that they can see. A spell ends if it was cast with a 3rd-level or lower spell slot. For spells using a 4th-level or higher spell slot, the priest makes a Wisdom ability check (DC 10 + the spell's level) for each one, ending the effect on a success." }
    - { name: 'Spirit Guardians (3rd-Level; V, S, M, Concentration)', desc: "Spectral forms surround the priest in a 10-foot radius for 10 minutes. The priest can choose creatures they can see to be unaffected by the spell. Other creatures treat the area as difficult terrain, and when a creature enters the area for the first time on a turn or starts its turn there, it makes a DC 13 Wisdom saving throw, taking 10 (3d6) radiant or necrotic damage (priest's choice) on a failure or half damage on a success." }
'bonus actions':
    - { name: 'Healing Word (1st-Level; V)', desc: "The priest or a living creature within 60 feet regains 5 (1d4 + 3) hit points. The priest can't cast this spell and a 1st-level or higher spell on the same turn." }
    - { name: 'Priests are ordained followers of a deity whose faith grants them spellcasting abilities', desc: 'In a small community lucky enough to have one, a priest is the primary spiritual leader, healer, and defender against supernatural evil. In a city, a priest might lead prayers at a temple, sometimes under the guidance of a high priest.' }

---
```statblock
monster: Priest - A5E
```
