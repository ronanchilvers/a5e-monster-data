---
statblock: true
name: 'Invisible Stalker - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Elemental
cr: 6
ac: 14
hp: 104
hit_dice: '16d8 + 32'
speed: '50 ft., fly 50 ft. (hover)'
stats:
    - 16
    - 18
    - 14
    - 10
    - 14
    - 10
damage_resistances: 'damage from nonmagical weapons'
damage_immunities: poison
condition_immunities: 'fatigue, grappled, paralyzed, petrified, poisoned, prone, restrained, unconscious'
skillsaves:
    - { perception: 5 }
    - { stealth: 7 }
senses: 'darkvision 60 ft., passive Perception 15'
languages: 'Auran, Common'
traits:
    - { name: Invisibility, desc: 'The stalker is invisible. Creatures that see invisible creatures see the stalker as a vague humanoid outline.' }
    - { name: 'Wind Tracker', desc: "If given a quarry by a summoner, the stalker knows the direction and distance to the quarry as long as they are on the same plane of existence and not sealed from each other by a barrier that doesn't allow air to pass." }
    - { name: 'Elemental Nature', desc: "An invisible stalker doesn't require air, sustenance, or sleep." }
actions:
    - { name: Multiattack, desc: 'The stalker makes two melee attacks.' }
    - { name: Slam, desc: 'Melee Weapon Attack: +6 to hit, reach 5 ft., one target. Hit: 12 (2d8 + 3) bludgeoning damage. On a critical hit, the target is pushed up to 15 feet and knocked prone.' }
'bonus actions':
    - { name: 'Gust (Recharge 6)', desc: 'The stalker briefly turns into a gust of wind and moves up to its Speed without provoking opportunity attacks. It is able to pass through an opening as narrow as 1 inch wide without squeezing.' }
combat:
    - { name: 'The invisible stalker single-mindedly targets its quarry', desc: "If it's getting the worst of combat, it retreats but does not give up. It stalks its target, replacing its direct assaults with hit-and-run raids spread out over days: attacking when its quarry is alone, setting up traps, pushing its enemy off a cliff, and the like." }

---
```statblock
monster: Invisible Stalker - A5E
```
